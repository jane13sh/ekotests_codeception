<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class IngredientStorageUnitCest
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
    // tests

    public function getExistingStorageUnitsList(FunctionalTester $I)
    {

        $I->sendGet('/api/stores');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $storages_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getStorageUnitsValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($storages_array, $etalon);

    }

    public function getStorageUnitsById(FunctionalTester $I)
    {
        $I->sendGet('/api/stores/8');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $stores = json_decode($response, true);
        $r = $I->getStorageUnitsListJsonById();
        $etalon = json_decode($r, true);
        $I->assertEquals($stores, $etalon);

    }


    public function createNewStorageUnits(FunctionalTester $I)
    {
        $json = $I->getJsonForStorageUnitsCreate();
        $I->sendPOST('/api/stores', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $etalon_resp = $I->getJsonForStorageUnitsCreated();
        $j = json_decode($etalon_resp, true);
        $I->assertEquals($r, $j);
        $I->sendGET('/api/stores');
        $I->seeResponseContains('storage in test created');

    }

    public function deleteStorageUnits(FunctionalTester $I)
    {

        $I->sendDELETE('/api/stores/4');
        $I->seeResponseCodeIs(204);
        $I->sendGET('/api/stores/');
        $I->dontSeeResponseContains('Сенаж 17');

    }

    public function updateStorageUnits(FunctionalTester $I)
    {
        $json = $I->getJsonForStorageUnitsUpdate();
        $I->sendPUT('/api/stores/1', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $etalon_resp = $I->getJsonForStorageUnitsUpdated();
        $etalon = json_decode($etalon_resp, true);
        $I->assertEquals($r, $etalon);




    }

}
