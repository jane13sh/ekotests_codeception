<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class FeedingPlansCest
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





    public function getExistingFeedingPlansList(FunctionalTester $I)
    {

        $I->sendGet('/api/feedingPlans');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $fplans_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getFeedingPlansValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($fplans_array, $etalon);

    }

    public function getFeedingPlansById(FunctionalTester $I)
    {   // проверка получения рациона по id
        $I->sendGet('/api/feedingPlans/10');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $fplan = json_decode($response, true);
        $r = $I->getFeedingPlansListJsonById();
        $etalon = json_decode($r, true);
        $I->assertEquals($fplan, $etalon);

    }


    public function createNewFeedingPlan(FunctionalTester $I)
    {
        $json = $I->getJsonForFeedingPlanCreate();
        $I->sendPOST('/api/feedingPlans', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $j = json_decode($json, true);
        $I->assertEquals($r, $j);
        $I->sendGet('/api/feedingPlans');
        $I->SeeResponseContains('plan created in test');

    }

    public function deleteFeedingPlan(FunctionalTester $I)
    {

        $I->sendDELETE('/api/feedingPlans/9');
        $I->seeResponseCodeIs(204);
        $I->sendGET('/api/mixers/');
        $I->dontSeeResponseContains('Т 2 - 6');

    }

    public function updateFeedingPlan(FunctionalTester $I)
    {
        $json = $I->getJsonForFeedingPlanUpdate();
        $I->sendPUT('/api/feedingPlans/10', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $fplan = json_decode($response, true);
        $etalon = json_decode($json, true);
        $I->assertEquals($fplan, $etalon);


    }

    public function createFeedingPlanValidation(FunctionalTester $I)
    {   // пустые поля
        $json = '{
        "name": "",
        "rationId": 1111,
        "parts": [
            0.00,
            0.55
        ],
        "id": 55
        }';
        //
        $I->sendPOST('/api/feedingPlans', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
//        $etalon = '{
//        "Payload.Name": [
//            "\'Name\' должно быть длиной от 1 до 32 символов. Вы ввели 0 символов."
//        ],
//        "Payload.Parts": [
//            "Parts must equal to 1 in total"
//        ],
//        "Payload.RationId": [
//            "Doesn\'t exist"
//        ]
//        }';
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $etalon = json_decode($etalon, true);
//        $I->assertEquals($response, $etalon);
        // некорректные поля

        $json = '  {
        "name": "123456789012345678901234567890123",
        "rationId": "",
        "parts": [
            0.1,
            0.9
        ],
        "id": 55
          }';
        //
        $I->sendPOST('/api/feedingPlans', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
//        $etalon = '{
//        "Payload.Name": [
//            "\'Name\' должно быть длиной от 1 до 32 символов. Вы ввели 33 символов."
//        ],
//        "Payload.RationId": [
//            "\'Ration Id\' обязано быть непустым."
//        ]
//          }';
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $etalon = json_decode($etalon, true);
//        $I->assertEquals($response, $etalon);
        // имя уже есть
        $json = '  {
        "name": "Д - 0 50/50%",
        "rationId": 1,
        "parts": [
            0.5,
            0.5
        ],
        "id": 77
           }';
        //
        $I->sendPOST('/api/feedingPlans', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
//        $etalon = '{
//            "Payload.Name": [
//                "Not unique"
//            ]
//        }';
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $etalon = json_decode($etalon, true);
//        $I->assertEquals($response, $etalon);


    }


}
