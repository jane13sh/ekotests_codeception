<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class IngredientsCest
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


    public function getExistingIngredientsList(FunctionalTester $I)
    {

        $I->sendGet('/api/ingredients');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $ingredients_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getIngredientsValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($ingredients_array, $etalon);

    }

        public function getIngredientById(FunctionalTester $I)
    {   // проверка получения ингредиента по id
        $I->sendGet('/api/ingredients/1');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $ingredient = json_decode($response, true);
        $r = $I->getIngredientsValidListByIdJson();
        $etalon = json_decode($r, true);
        $I->assertEquals($ingredient, $etalon);

    }


    public function createNewIngredient(FunctionalTester $I)
    {
        $json = $I->getJsonForIngredientCreate();
        $I->sendPOST('/api/ingredients', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $j = json_decode($json, true);
        // удаляем из массива. вернувшегося в ответ, три первых параметра, которых нет в эталонном запросе, чтобы сравнить остальные данные
        $r1 = array_slice($r, 3);
        $I->assertEquals($r1, $j);
        $I->sendGET('/api/ingredients');
        $I->seeResponseContains('in test created ingredient');

    }

    public function deleteIngredient(FunctionalTester $I)
    {

        $I->sendDELETE('/api/ingredients/4');
        $I->seeResponseCodeIs(204);
        //$I->sendGET('/api/ingredients/4'); завести ошибку
        $I->sendGET('/api/ingredients/');
        $I->dontSeeResponseContains('Барда сухая');

    }

    public function updateIngredient(FunctionalTester $I)
    {
        $json = $I->getJsonForIngredientUpdate();
        $I->sendPUT('/api/ingredients/3', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $ingredient = json_decode($response, true);
        $etalon = json_decode($json, true);

        $I->assertEquals($ingredient, $etalon);




    }

    public function createIngredientValidation(FunctionalTester $I)
    {   // пустые поля
        $json = '{
        "id": 14333,
        "name": "",
        "description": "description",
        "type": 1,
        "dryMatter": 0,
        "lossType": 8,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 9,
        "digiStarInterchangeCode": ""
         }';
        $I->sendPOST('/api/ingredients', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
     //   $response = $I->grabResponse();
//        $etalon_response = '{
//        "Payload.Name": [
//            "\'Name\' должно быть длиной от 1 до 32 символов. Вы ввели 0 символов."
//        ],
//        "Payload.LossType": [
//            "\'Loss Type\' имеет диапазон значений, который не содержит \'8\'."
//        ],
//        "Payload.DryMatter": [
//            "\'Dry Matter\' должно быть больше \'0\'."
//        ],
//        "Payload.LossCount": [
//            "If Loss type is not \'None\',then Loss Count must be greater than 0.Otherwise, it must be equal to 0"
//        ],
//        "Payload.WindLossProportion": [
//            "\'Wind Loss Proportion\' Обязано быть от 0 до 1. Вы ввели 9."
//        ],
//        "Payload.DigiStarInterchangeCode": [
//            "\'Digi Star Interchange Code\' не должно быть пусто.",
//            "\'\' должно быть длиной от 1 до 6 символов. Вы ввели 0 символов.",
//            "\'\' имеет неверный формат."
//        ]
//    }';
//
//        $response = json_decode($response, true);
//        $etalon_response = json_decode($etalon_response, true);
//        $I->assertEquals($response, $etalon_response);
        // имя и digistar уже существует
        $json = '{
        "id": 14333,
        "name": "Сено",
        "description": "description",
        "type": 1,
        "dryMatter": 0.5,
        "lossType": 0,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 0,
        "digiStarInterchangeCode": "Raps"
        }';
        $I->sendPOST('/api/ingredients', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
//        $etalon_response = '{"Payload.Name":["Not unique"],"Payload.DigiStarInterchangeCode": ["Not unique"]}';
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $etalon_response = json_decode($etalon_response, true);
//        $I->assertEquals($response, $etalon_response);


        // пробелы
        $json = '{
        "id": 14333,
        "name": "    Ингредиент",
        "description": "description",
        "type": 1,
        "dryMatter": 0.5,
        "lossType": 0,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 0,
        "digiStarInterchangeCode": "  i"
        }';
        $I->sendPOST('/api/ingredients', $json);
        $response = $I->grabResponse();
        $response = json_decode($response, true);
        $I->assertEquals("i", $response['digiStarInterchangeCode']);
        $I->assertEquals("Ингредиент", $response['name']);

        // длина полей
        $json = '{
        "id": 21,
        "name": "1234567890123456789012345678901234567890",
        "description": "description",
        "type": 1,
        "dryMatter": 0.5,
        "lossType": 0,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 0,
        "digiStarInterchangeCode": "digistarcode"
        }';
        $I->sendPOST('/api/ingredients', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
//        $etalon_response = '{
//        "Payload.Name": [
//            "\'Name\' должно быть длиной от 1 до 32 символов. Вы ввели 40 символов."
//        ],
//        "Payload.DigiStarInterchangeCode": [
//            "\'\' должно быть длиной от 1 до 6 символов. Вы ввели 12 символов."
//        ]
//        }';
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $etalon_response = json_decode($etalon_response, true);
//        $I->assertEquals($response, $etalon_response);

        // спецсимовлы в имени и кириллица в digi star
        $json = '{
        "id": 22,
        "name": "«Ингредиент 1» &*%#(^$@*&.,",
        "description": "description",
        "type": 1,
        "dryMatter": 0.5,
        "lossType": 0,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 0,
        "digiStarInterchangeCode": "код"
        }';
        $I->sendPOST('/api/ingredients', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
//
//        $etalon_response = '{
//        "Payload.DigiStarInterchangeCode": [
//            "\'\' имеет неверный формат."
//        ]
//         }';
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $etalon_response = json_decode($etalon_response, true);
//        $I->assertEquals($response, $etalon_response);

    }

}
