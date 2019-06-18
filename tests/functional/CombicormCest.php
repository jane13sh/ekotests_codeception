<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class CombicormCest
{     private $etalon_feeding_tasks_list = [];

    public function _before(FunctionalTester $I)
    {
        $sql_db_name = 'sqlite.db"';
        $lite_db_name = 'lite.db"';
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



    public function createCombicorm(FunctionalTester $I)
    {   $I->wantTo('create Combicorm');

        $json = $I->getJsonForCombicormCreate();
        $I->sendPOST('/api/compound-feeds', $json);
        $I->seeResponseIsJson();
        // получаем корректный код ответа
        $I->seeResponseCodeIs(201);
        $response = $I->grabResponse();
        // делаем из ответа массив
        $r = json_decode($response, true);
        // получаем захардкоженный корректный ответ и тоже формируем массив
        $etalon_json = $I->getJsonForCombicormCreated();
        $j = json_decode($etalon_json, true);
        // сравниваем
        $I->assertEquals($r, $j);
        // ищем комбикорм среди ингредиентов
        $I->sendGET('/api/ingredients/18');
        $combicorm = $I->grabResponse();
        $I->seeResponseCodeIs(200);
        $r = json_decode($combicorm, true);
        // сравниваем с эталонным ответом
        $etalon_comb = $I->getJsonForCombicormAsIngredient();
        $j = json_decode($etalon_comb, true);
        $I->assertEquals($r, $j);


    }

    // добавление комьбикорма в комбикорм
    public function addCombicormInCombicorm(FunctionalTester $I)
    {  // создаем првый комбикорм
        $json = $I->getJsonForCombicormCreate();
        $I->sendPOST('/api/compound-feeds', $json);
        // создаем второй комбикорм и включаем туда первый
        $combic2 =  $I->getJsonForCombicormContainsCombicormCreate();
        $I->sendPOST('/api/compound-feeds',$combic2);
        $I->seeResponseContains('Must not be a compound feed ingredient or water');


    }


// невозможность вручную создать ингредиент типа комбикорм
    public function addIngredientWithTypeCombicorm(FunctionalTester $I)
    {
        $json = '{
        "id": 100,
        "name": "combic3",
        "description": "description",
        "type": 4,
        "dryMatter": 0.5,
        "lossType": 0,
        "lossCount": 0,
        "price": 0,
        "dynamicDryMatter": true,
        "isUnderweight": true,
        "windLossProportion": 0,
        "digiStarInterchangeCode": "123456"
    }';

        $I->sendPOST('/api/ingredients', $json);
        $I->seeResponseCodeIs(400);
        $I->seeResponseContains('Нельзя вручную создавать ингредиенты типа \'Комбикорм');


    }

    public function deleteCombicorm(FunctionalTester $I)
    {
        $json = $I->getJsonForCombicormCreate();
        $I->sendPOST('/api/compound-feeds', $json);
        $response = $I->grabResponse();
        // делаем из ответа массив
        $r = json_decode($response, true);
        $I->sendDELETE('/api/compound-feeds/' . $r['id']);
        $I->seeResponseCodeIs(204);
        $I->sendGET('/api/compound-feeds');
        $I->dontSeeResponseContains($r['name']);



    }


    public function updateIngeredientsOrderInCombicorm(FunctionalTester $I)
    {
        $json = $I->getJsonForCombicormCreate();
        $I->sendPOST('/api/compound-feeds', $json);
        $response = $I->grabResponse();
        // делаем из ответа массив
        $r = json_decode($response, true);
        $json = $I->getJsonForUpdateIngeredientsOrderInCombicorm();
        $I->sendPUT('/api/compound-feeds/' . $r['id'], $json);
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $response = json_decode($response, true);
        $etalon = json_decode($json, true);
        $I->assertEquals($response, $etalon);
    }


    public function updateCombicorm(FunctionalTester $I)
    {
        $json = $I->getJsonForCombicormCreate();
        $I->sendPOST('/api/compound-feeds', $json);
        $json = '{
        "dryMatterProportion": 0.89928,
        "composition": [
            {
                "name": "Соя",
                "ingredientId": 5,
                "ordinalNumber": 1,
                "dryWeight": 0.5,
                "mixingTime": "00:20:00"
            },
            {
                "name": "Рапс",
                "ingredientId": 6,
                "ordinalNumber": 2,
                "dryWeight": 0.5,
                "mixingTime": "00:10:00"
            }
        ],
        "name": "combicorm updated",
        "description": "description updated",
        "density": 777,
        "digiStarInterchangeCode": "54321",
        "id": 18
        }';
        $I->sendPUT('/api/compound-feeds/18', $json);
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $I->sendGET('/api/ingredients/18');
        $combicorm = '{
    "stores": [],
    "blockedActions": {
        "ChangeIngredientTypeFromCompoundFeed": [
            "Нельзя изменить тип ингредиента, так как с ним связан рецепт на приготовление корма"
        ]
    },
    "composition": [
        {
            "ingredientId": 5,
            "ordinalNumber": 1,
            "dryWeight": 0.5,
            "weight": 0.555556,
            "mixingTime": "00:20:00"
        },
        {
            "ingredientId": 6,
            "ordinalNumber": 2,
            "dryWeight": 0.5,
            "weight": 0.555556,
            "mixingTime": "00:10:00"
        }
    ],
    "name": "combicorm updated",
    "description": "description updated",
    "type": 4,
    "dryMatter": 0.9,
    "lossType": 0,
    "lossCount": 0,
    "price": 0,
    "dynamicDryMatter": false,
    "isUnderweight": false,
    "digiStarInterchangeCode": "54321",
    "id": 18
}';
        $response = $I->grabResponse();
        $response = json_decode($response, true);
        $combicorm = json_decode($combicorm, true);
        $I->assertEquals($response, $combicorm);

    }

}
