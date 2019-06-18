<?php 

class FeedLeftoverCest
{
    public function _before(FunctionalTester $I)
    {
        $sql_db_name = 'bd_leftowers\leftowers_sqlite.db';
        $lite_db_name = 'bd_leftowers\leftowers_lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();

    }

    // tests
    public function _after(FunctionalTester $I)
    {
        $I->stopApplication();
    }


    public function getExistingFeedLeftoverList(FunctionalTester $I)
    {

        $I->sendGet('/api/foodRemnants?Date=2019-01-29');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $leftowers_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getLeftowersListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($leftowers_array, $etalon);

    }

    
    public function getExistingFeedLeftoverById(FunctionalTester $I)
    {   $json = '{
        "section": {
            "id": 12,
            "name": "44"
        },
        "sectionId": 12,
        "weight": 153,
        "weightProportion": 0.02,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 10
        }';
        $I->sendGet('/api/foodRemnants/10');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $json = json_decode($json, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $response = json_decode($response, true);
        // сравниваем
        $I->assertEquals($response, $json);

    }

    public function createFeedLeftovers(FunctionalTester $I)
        {$json = '{
        "sectionId": 5,
        "weight": 400,
        "weightProportion": 0.0825,
        "accumulationStartDate": "2019-01-30T00:00:00+03:00",
        "evaluationDate": "2019-01-30T23:00:00+03:00",
        "autoFormed": false,
        "id": 31
        }';
        $I->sendPOST('/api/foodRemnants', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $response = json_decode($response, true);
        $etalon = json_decode($json, true);
        $I->assertEquals($response['sectionId'], $etalon['sectionId']);
        $I->assertEquals($response['weight'], $etalon['weight']);
        $I->assertEquals($response['weightProportion'], $etalon['weightProportion']);
        $I->assertEquals($response['accumulationStartDate'], $etalon['accumulationStartDate']);
        $I->assertEquals($response['autoFormed'], $etalon['autoFormed']);
        $I->assertEquals($response['id'], $etalon['id']);

    }

    public function deleteFeedLeftovers(FunctionalTester $I)
    {

        $I->sendDELETE('/api/foodRemnants/9');
        $I->seeResponseCodeIs(204);
        // выгребаем ответ, пришедший на запрос
        $I->sendGET('/api/foodRemnants/9');
        $I->seeResponseCodeIs(404);

    }


    public function updateFeedLeftovers(FunctionalTester $I)
    {
        $json = '{
        "section": {
            "id": 6,
            "name": "23"
        },
        "sectionId": 6,
        "weight": 400,
        "weightProportion": 0.0825,
        "accumulationStartDate": "2019-01-29T00:00:00+03:00",
        "evaluationDate": "2019-01-29T23:00:00+03:00",
        "autoFormed": false,
        "id": 5
        }';
        $I->sendPUT('/api/foodRemnants/5', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $response = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon = json_decode($json, true);
        // сравниваем
        $I->assertEquals($response, $etalon);

    }


//    public function cloneFeedLeftovers(FunctionalTester $I)
//    {   $json = '{
//        "date": "2019-01-30"
//        }';
//        $I->sendPOST('/api/foodRemnants/clone', $json);
//        $I->seeResponseIsJson();
//        $I->seeResponseCodeIs(200);
//        $response = $I->grabResponse();
//        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
//        $leftowers_array = json_decode($response, true);
//        // забираем эталонныый json и тоже преобразуем в массив
//        $r = $I->getClonedLeftowersListJson();
//        $etalon = json_decode($r, true);
//        // сравниваем
//        $I->assertEquals($leftowers_array, $etalon);
//        $I->sendPOST('/api/foodRemnants/clone', $json);
//        $I->seeResponseCodeIs(400);
//
//    }


}
