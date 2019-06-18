<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class MixersCest
//http://localhost:3015/api/tasks/2018-12-15/update
{
    public function _before(FunctionalTester $I)
    {
        $sql_db_name = 'sqlite.db';
        $lite_db_name = 'lite.db';
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


    public function getExistingMixersList(FunctionalTester $I)
    {

        $I->sendGet('/api/mixers');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $mixers_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getMixersValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($mixers_array, $etalon);

    }

    public function getMixerById(FunctionalTester $I)
    {   // проверка получения рациона по id
        $I->sendGet('/api/mixers/1');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $ration = json_decode($response, true);
        $r = $I->getMixersValidListJsonById();
        $etalon = json_decode($r, true);
        $I->assertEquals($ration, $etalon);

    }


    public function createNewMixer(FunctionalTester $I)
    {
        $json = $I->getJsonForMixerCreate();
        $I->sendPOST('/api/mixers', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $j = json_decode($json, true);
        $I->assertEquals($r, $j);
        $I->sendGET('/api/mixers');
        $I->seeResponseContains('mixer in test create');

    }

    public function deleteMixer(FunctionalTester $I)
    {

        $I->sendDELETE('/api/mixers/1');
        $I->seeResponseCodeIs(204);
        $I->sendGET('/api/mixers/');
        $I->dontSeeResponseContains('30');

    }

    public function updateMixer(FunctionalTester $I)
    {
        $json = $I->getJsonForMixerUpdate();
        $I->sendPUT('/api/mixers/1', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $mixer = json_decode($response, true);
        $etalon = json_decode($json, true);
        $I->assertEquals($mixer, $etalon);


    }
}
