<?php

class PhysiologicalGroupCest
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




    public function getExistingPhysiologicalGroupList(FunctionalTester $I)
    {

        $I->sendGet('/api/physiologicalGroups');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $ph_array = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $r = $I->getPhysiologicalGroupValidListJson();
        $etalon = json_decode($r, true);
        // сравниваем
        $I->assertEquals($ph_array, $etalon);

    }
// ошибка 838
//    public function getPhysiologicalGroupById(FunctionalTester $I)
//    {   // проверка получения ингредиента по id
//        $I->sendGet('/api/physiologicalGroups/5');
//        $I->seeResponseIsJson();
//        $I->seeResponseCodeIs(200);
//        $response = $I->grabResponse();
//        $ingredient = json_decode($response, true);
//        $r = $I->getPhysiologicalGroupJsonById();
//        $etalon = json_decode($r, true);
//        $I->assertEquals($ingredient, $etalon);
//
//    }
//

    public function createNewPhysiologicalGroup(FunctionalTester $I)
    {
        $json = $I->getJsonForPhysiologicalGroupsCreate();
        $I->sendPOST('/api/physiologicalGroups', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $r = json_decode($response, true);
        $j = json_decode($json, true);
        $I->seeResponseContains('id');
        $I->assertEquals($r['name'], $j['name']);
        $I->assertEquals($r['description'], $j['description']);
        $I->sendGET('/api/physiologicalGroups');
        $I->seeResponseContains('in test created group');

    }

    public function deletePhysiologicalGroup(FunctionalTester $I)
    {

        $I->sendDELETE('/api/physiologicalGroups/4');
        $I->seeResponseCodeIs(204);
        //$I->sendGET('/api/ingredients/4'); завести ошибку
        $I->sendGET('/api/physiologicalGroups/');
        $I->dontSeeResponseContains('Сух - 1');

    }

    public function updatePhysiologicalGroup(FunctionalTester $I)
    {
        $json = $I->getJsonForPhysiologicalGroupUpdate();
        $I->sendPUT('/api/physiologicalGroups/10', $json);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $group = json_decode($response, true);
        $etalon = json_decode($json, true);
        $I->assertEquals($group, $etalon);
        $I->sendGET('/api/physiologicalGroups/');
        $I->SeeResponseContains('Т 12-18 updated');



     }

}
