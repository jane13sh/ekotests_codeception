<?php 

class MilkProductivityCest
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


    public function getExistingMilkProductivity(FunctionalTester $I)
    {

        $I->sendGet('/api/milkProductivities');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $response = json_decode($response, true);
        $I->assertEquals($response, []);

    }

    public function createMilkProductivity(FunctionalTester $I)
    { $data = '{
      "sectionId": 1,
      "milkYield": 100,
      "milkYieldPerHead": 222,
      "evaluationDate": "2019-02-05T11:56:30.786Z",
      "id": 1
        }';
        $I->sendPOST('/api/milkProductivities', $data);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $response = $I->grabResponse();
        $response = json_decode($response, true);
        $etalon = '{
        "section": {
            "id": 1,
            "name": "32"
        },
        "sectionId": 1,
        "milkYield": 100,
        "milkYieldPerHead": 222,
        "evaluationDate": "2019-02-05T11:56:30.786+00:00",
        "id": 1
           }';
        $etalon = json_decode($etalon, true);
        $I->assertEquals($response, $etalon);

    }


    public function deleteMilkProductivity(FunctionalTester $I)
    { $data = '{
      "sectionId": 1,
      "milkYield": 100,
      "milkYieldPerHead": 222,
      "evaluationDate": "2019-02-05T11:56:30.786Z",
      "id": 1
        }';
        $I->sendPOST('/api/milkProductivities', $data);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $I->sendDELETE('/api/milkProductivities/1', $data);
        $I->seeResponseCodeIs(204);
        $I->sendGet('/api/milkProductivities/1');
        $I->seeResponseCodeIs(404);


    }


    public function updateMilkProductivity(FunctionalTester $I)
    {
      $data = '{
      "sectionId": 1,
      "milkYield": 100,
      "milkYieldPerHead": 222,
      "evaluationDate": "2019-02-05T11:56:30.786Z",
      "id": 1
      }';
      $I->sendPOST('/api/milkProductivities', $data);
      $I->seeResponseIsJson();
      $I->seeResponseCodeIs(200);
      $data = '{
      "sectionId": 1,
      "milkYield": 111,
      "milkYieldPerHead": 222,
      "evaluationDate": "2019-02-05T11:56:30.786Z",
      "id": 1
       }';
      $I->sendPUT('/api/milkProductivities/1', $data);
      $I->seeResponseIsJson();
      $I->seeResponseCodeIs(200);
      $response = $I->grabResponse();
      $response = json_decode($response, true);
      $I->assertEquals($response['milkYield'], '111');
      $I->assertEquals($response['milkYieldPerHead'], '222');



    }

    public function createMilkProductivityValidation(FunctionalTester $I)
    { $data = '{
      "sectionId": "",
      "milkYield": "",
      "milkYieldPerHead": "",
      "evaluationDate": "",
      "id": ""
        }';
        $I->sendPOST('/api/milkProductivities', $data);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(400);
        $response = $I->grabResponse();
    }
}
