<?php
//use Helper\Functional;
//use Helper\Etalons;
//use Helper\Common;
//
//class OperatorsCest
//{
//    public function _before(FunctionalTester $I)
//    {
//        $sql_db_name = 'sqlite.db';
//        $lite_db_name = 'lite.db';
//        $I->haveHttpHeader('Content-Type', 'application/json');
//        $I->updateSQLDataBase($sql_db_name);
//        $I->updateLiteDataBase($lite_db_name);
//        $I->runApplication();
//        $I->checkApplication();
//
//    }
//
//    public function _after(FunctionalTester $I)
//    {
//
//        $I->stopApplication();
//
//    }
//
//
//    public function OperatorsTest(FunctionalTester $I)
//    {   $I->haveHttpHeader('Content-Type', 'application/json');
//        // предварительная подготовака
//        //$I->updateDataBase();
//        //$I->runApplication();
//       // $I->sendGet('/api/breeding-complex');
//        //while ($I->seeResponseCodeIs(200)):
//         //   print_r('ok');
//       // endwhile;
//
//        // Проверка получения списка
//        $I->sendGet('/api/operators');
//        $I->seeResponseIsJson();
//        $I->seeResponseCodeIs(200);
//
//        // создание
//        $create_operator_json ='{
//          "name": "new operator",
//          "description": "description",
//          "hireDate": "2016-12-12"
//        }';
//        $I->sendPost('/api/operators', $create_operator_json);
//        $I->seeResponseIsJson();
//        //$I->seeResponseCodeIs(200);
//        $response = $I->grabResponse();
//        $response_array = json_decode($response, true);
//        $I->assertEquals('new operator', $response_array['name']);
//        $I->assertEquals('description', $response_array['description']);
//        $I->assertEquals('2016-12-12', $response_array['hireDate']);
//        $I->assertEquals(true, $response_array['isActive']);
//        //сохраняем полученный id чтобы потом по нему обращаться
//
//        // получение в общем списке
//
//        $I->sendGet('/api/operators');
//        $I->seeResponseContains($response_array['name']);
//        $I->seeResponseCodeIs(200);
//
//        // получение по id
//
//        $I->sendGet('/api/operators/' . $response_array['id']);
//        $I->seeResponseContains($response_array['name']);
//
//        // запрос по несуществующему id
//
//        $I->sendGet('/api/operators/13');
//        $I->seeResponseCodeIs(404);
//
//
//
//        // редактирование (увольняем)
//        $operator_put_json = '
//       {
//        "id":  ' . $response_array['id'] . ',' .  '
//        "name": "new operator",
//        "description": "description",
//        "isActive": false,
//        "hireDate": "2016-12-12",
//        "terminationDate": "2017-12-12"
//        }
//        ';
//
//        $I->sendPut('/api/operators/' . $response_array['id'], $operator_put_json);
//        $I->seeResponseCodeIs(200);
//        $put_resp = $I->grabResponse();
//        $put_resp_array = json_decode($put_resp, true);
//        $I->assertEquals(false, $put_resp_array['isActive']);
//        $I->assertEquals('2017-12-12', $put_resp_array['terminationDate']);
//
//        // фильтрация по статусу
//        $I->sendGet('/api/operators?IsActive=true');
//        $I->dontSeeResponseContains($response_array['name']);
//        $I->sendGet('/api/operators?IsActive=false');
//        $I->seeResponseContains($response_array['name']);
//            // фильтрация по дате
//        $I->sendGet('/api/operators?Date=2016-12-12');
//        $I->SeeResponseContains($response_array['name']);
//
//
//        // удаление
//
//        $I->sendDELETE('/api/operators/' . $response_array['id']);
//        $I->seeResponseCodeIs(204);
//        // удаление несуществующего
//        $I->sendDELETE('/api/operators/99');
//        $I->seeResponseCodeIs(404);
//        // проверка отсутствия в выводе
//        $I->sendGet('/api/operators');
//        $I->dontSeeResponseContains($response_array['name']);
//
//
//       $I->stopApplication();
//
//    }
//
//
//
//}
