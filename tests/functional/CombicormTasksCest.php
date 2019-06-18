<?php

class CombicormTasksCest
{
    public function _before(FunctionalTester $I)
    {
        $sql_db_name = 'bd_leftowers/leftowers_sqlite.db';
        $lite_db_name = 'bd_leftowers/leftowers_lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();

    }

    public function _after(FunctionalTester $I)
    {
        $I->stopApplication();
    }


    public function getExistingCombicormTasksList(FunctionalTester $I)
    {

        $I->sendGet('/api/compoundFeedTasks');
        $response = $I->grabResponse();
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $I->assertEquals($response, '[]');
    }


    public function createCombicormTask(FunctionalTester $I)
    {
        $date = date('Y-m-d');
        $json = '{mixerId: 2, compoundFeedId: 18, targetWeight: 162, executionDate: "' . $date . '"}';
        $I->sendPOST('/api/compoundFeedTasks/create', $json);
        $I->seeResponseCodeIs(200, 20);
        $response = $I->grabResponse();
        $etalon = $I->getCombiTasksNewListJson();
        $j = json_decode($etalon, true);
        $r = json_decode($response, true);
        $I->assertEquals($j[0]['id'], $r[0]['id']);

    }


    public function runTask(FunctionalTester $I)
    {   $date = date('Y-m-d');
        $json = '{mixerId: 2, compoundFeedId: 18, targetWeight: 162, executionDate: "' . $date . '"}';
        $I->sendPOST('/api/compoundFeedTasks/create', $json);
        $I->seeResponseCodeIs(200);
        $I->sendPOST('/api/compoundFeedTasks/1/run');
        $I->seeResponseCodeIs(200, 20);
        $I->sendGet('/api/compoundFeedTasks/1');
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $I->assertEquals($r['status'], 1);

    }
    public function cancelTask(FunctionalTester $I)
    {
        $date = date('Y-m-d');
        $json = '{mixerId: 2, compoundFeedId: 18, targetWeight: 162, executionDate: "' . $date . '"}';
        $I->sendPOST('/api/compoundFeedTasks/create', $json);
        $I->seeResponseCodeIs(200);
        $I->sendPOST('/api/compoundFeedTasks/1/run');
        $I->sendPOST('/api/compoundFeedTasks/1/cancel');
        $I->seeResponseCodeIs(200, 20);
        $I->sendGet('/api/compoundFeedTasks/1');
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $I->assertEquals($r['status'], 3);


    }

    public function completeTask(FunctionalTester $I)
    {
        $date = date('Y-m-d');
        $json = '{mixerId: 2, compoundFeedId: 18, targetWeight: 162, executionDate: "' . $date . '"}';
        $I->sendPOST('/api/compoundFeedTasks/create', $json);
        $I->seeResponseCodeIs(200);
        $I->sendPOST('/api/compoundFeedTasks/1/run');
        $I->sendPOST('/api/compoundFeedTasks/1/complete');
        $I->seeResponseCodeIs(200, 20);
        $I->sendGet('/api/compoundFeedTasks/1');
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $I->assertEquals($r['status'], 2);


    }

    public function uploadDigiStarFileForCombicorm(FunctionalTester $I)
    {   // формат даты для запроса get
        $date = date('Y-m-d');
        // формируем задание на комбикорм
        $json = '{mixerId: 2, compoundFeedId: 18, targetWeight: 162, executionDate: "' . $date . '"}';
        $I->sendPOST('/api/compoundFeedTasks/create', $json);
        $I->seeResponseCodeIs(200, 20);
        //файлы который формируются при  экспорте сохраняются. перед тестом мы их удаляем
        //array_map("unlink", glob("release/feeding-digi-star/tasks/*.TXT"));
        //экспортируем в digi star
        $I->sendGET('http://127.0.0.1:3050/api/v1/compound-feed-tasks?date=' . $date . '&mixerId=2"');

        // в полученном ответе вытаскиваем номер задания для формирования нашего файла для загрузки
        $resp = $I->grabResponse();
        $rest = substr($resp, 273, -363);
        //дата для файла ds done
        $date1 = date('m-d-y');
        // время для файла ds done
        $time = date('H:i');
        // получаем содержимое эталонного файла
        $w = file_get_contents('tests\_data\digi_star_combicorm\DS_DONEsuper.TXT', true);
        // зааменяем в нем номер задания, время и дату на текущие
        $w = str_replace("02-12-19", $date1, $w);
        $w = str_replace("9096", $rest, $w);
        $w = str_replace("13:57", $time, $w);
        // записываем все что получилось в новый файл ds done
        $filename = 'tests\_data\digi_star_combicorm\DS_DONE.TXT';
        file_put_contents($filename, $w);
        // проверяем, что задание переведено в статус выполняется
        $I->sendGet('/api/compoundFeedTasks/1');
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $I->assertEquals($r['status'], 1);
       // шлем запрос на импорт файла. нужно удалить ненужный хедер
        $I->deleteHeader('content-type');
        $I->sendPOST('http://127.0.0.1:3050/api/v1/compound-feed-tasks',['form-data' => 'files'], ['attachmentFile' => codecept_data_dir('digi_star_combicorm\DS_DONE.TXT')]);
        $I->seeResponseCodeIs(200);
       // проверяем, что статус задания поменялся на Завершено, хедер возвращаем
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendGET('/api/compoundFeedTasks/1');
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $I->assertEquals($r['status'], 2);

    }



}