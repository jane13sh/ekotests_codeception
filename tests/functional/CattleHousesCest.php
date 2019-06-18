<?php
use Helper\Functional;
use Helper\Etalons;
use Helper\Common;
class CattleHousesCest
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

    public function getExistingCattleHousesSectionsList(FunctionalTester $I)
    {

        $I->sendGet('/api/cattleHouses/1/sections');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        //преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $sections_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getCattleHousesSectionsValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($sections_array, $etalon);

    }

    public function getCattleHousesSectionById(FunctionalTester $I)
    {
        $I->sendGet('/api/cattleHouses/1/sections/3');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $stores = json_decode($response, true);
        $r = $I->getCattleHousesSectionListJsonById();
        $etalon = json_decode($r, true);
        $I->assertEquals($stores, $etalon);

    }


    public function createNewCattleHousesSection(FunctionalTester $I)
    {
        $json = $I->getJsonForCattleHousesCreate();
        $I->sendPOST('/api/cattleHouses/1/sections', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $etalon_resp = $I->getJsonForCattleHousesCreate();
        $j = json_decode($etalon_resp, true);
        $I->assertEquals($r, $j);
        $I->sendGET('/api/cattleHouses/1/sections');
        $I->seeResponseContains('section in test created');

    }

    public function deleteCattleHousesSection(FunctionalTester $I)
    {

        $I->sendDELETE('/api/cattleHouses/1/sections/28');
        $I->seeResponseCodeIs(204);
        $I->sendGET('/api/stores/');
        $I->dontSeeResponseContains('Копытчик');

    }


    public function updateCattleHousesSection(FunctionalTester $I)
    {
        $json = $I->getJsonForCattleHousesUpdate();
        $I->sendPUT('/api/cattleHouses/1/sections/45', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $etalon_resp = $I->getJsonForCattleHousesUpdate();
        $etalon = json_decode($etalon_resp, true);
        $I->assertEquals($r, $etalon);

    }
}
