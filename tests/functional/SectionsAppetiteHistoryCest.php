<?php 

class SectionsAppetiteHistoryCest
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


    public function getAppetiteHistory(FunctionalTester $I)
    {
        $I->sendGet('/api/sectionsAppetiteHistory');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $history_array = json_decode($response, true);
        $arr = $I->getSectionsAppetiteHistoryListArray();
        $I->assertEquals($history_array, $arr);
    }
}
