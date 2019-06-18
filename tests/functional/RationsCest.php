<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class RationsCest
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


    public function getExistingRationsList(FunctionalTester $I)
    {

        $I->sendGet('/api/rations');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $rations_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getRationsValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($rations_array, $etalon);

    }

    public function getRationById(FunctionalTester $I)
    {   // проверка получения рациона по id
        $I->sendGet('/api/rations/4');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $ration = json_decode($response, true);
        $r = $I->getRationsValidListJsonById();
        $etalon = json_decode($r, true);
        $I->assertEquals($ration, $etalon);

    }


    public function createNewRation(FunctionalTester $I)
    {
        $json = $I->getJsonForRationCreate();
        $I->sendPOST('/api/rations', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $j = json_decode($json, true);
        $I->assertEquals($r, $j);
        $I->sendGET('/api/rations');
        $I->seeResponseContains('ration create in test');


    }

    public function deleteRation(FunctionalTester $I)
    {

        $I->sendDELETE('/api/rations/9');
        $I->seeResponseCodeIs(204);
        $I->sendGET('/api/rations/');
        $I->dontSeeResponseContains('T 6 12');

    }

    public function updateRation(FunctionalTester $I)
    {
        $json = $I->getJsonForRationUpdate();
        $I->sendPUT('/api/rations/4', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $ration = json_decode($response, true);
        $etalon = json_decode($json, true);
        var_dump($ration);
        var_dump($ration);
        $I->assertEquals($ration, $etalon);
        // проверяем, что удаленный ингредиент можно вернуть в рацион
        $old_params = $I->getRationsValidListJsonById();
        $I->sendPUT('/api/rations/4', $old_params);
        $response1 = $I->grabResponse();
        $r1 = json_decode($response1, true);
        $j1 = json_decode($old_params, true);
        $I->assertEquals($r1, $j1);


    }

    public function createNewRationWithCombicorm(FunctionalTester $I, \Step\Functional\Combicorm $combicormStep)
    {
        $combicorm = $combicormStep->createCombicorm();
        $json = '{
           "ingredients": [
            {
                "name": "' . $combicorm['name'] . '",
                "ingredientId": "' . $combicorm['id'] . '",
                "ordinalNumber": 0,
                "dryWeight": 0.35,
                "ptoRotation": 0
            },

        ],
        "name": "ration with combicorm",
        "density": 700,
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": 1,
        "waterPtoRotation": 1,
        "digiStarInterchangeCode": "177777",
        "id": 61
        }';

        $I->sendPOST('/api/rations', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $I->sendGET('/api/rations/61');
        $response = $I->grabResponse();
        $response = json_decode($response, true);
        $I->assertEquals($response['name'], 'ration with combicorm');
        $I->assertEquals($response['density'], '700');
        $I->assertEquals($response['compensationMode'], 0);
        $I->assertEquals($response['waterWeight'], 1);
        $I->assertEquals($response['waterPtoRotation'], 1);
        $I->assertEquals($response['digiStarInterchangeCode'], 177777);
        $I->assertEquals($response['id'], 61);
        $I->assertEquals($response['ingredients'][0]['name'], $combicorm['name']);

    }


    public function createRationValidation(FunctionalTester $I)
    {   // пустые поля Наименование Digi Плотность
        $json = '{
        "ingredients": [
            {
                "name": "",
                "ingredientId": 0,
                "ordinalNumber": 4,
                "dryWeight": 0.8,
                "ptoRotation": 0
            }
        ],

        "name": "",
        "density": "",
        "isPremix": false,
        "compensationMode": 0,
        "waterWeight": "",
        "waterPtoRotation": 1,
        "digiStarInterchangeCode": "",
         "id": 65
    }';
        $I->sendPOST('/api/rations', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
//        $response = $I->grabResponse();
//        $etalon_response = '{
//        "Payload.Name": [
//            "\'Name\' должно быть длиной от 1 до 32 символов. Вы ввели 0 символов."
//        ],
//        "Payload.Density": [
//            "\'Density\' обязано быть непустым."
//        ],
//        "Payload.Ingredients": [
//            "Ingredients must go one after each other"
//        ],
//        "Payload.DigiStarInterchangeCode": [
//            "\'Digi Star Interchange Code\' не должно быть пусто.",
//            "\'\' должно быть длиной от 1 до 6 символов. Вы ввели 0 символов.",
//            "\'\' имеет неверный формат."
//        ],
//        "Payload.Ingredients[0].IngredientId": [
//            "\'\' должно быть больше или равно \'1\'."
//        ]
//    }';
//
//        $response = json_decode($response, true);
//        $etalon_response = json_decode($etalon_response, true);
//        $I->assertEquals($response, $etalon_response);


    }


}
