<?php //
//
//class FeedingTasksCest
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
//    public function getExistingFeedingTasksList(FunctionalTester $I)
//    {
//         $date = date('Y-m-d');
//         $I->sendGet('/api/tasks?Date=' . $date);
//         $response = $I->grabResponse();
//         $I->seeResponseIsJson();
//         $I->seeResponseCodeIs(200);
//         $I->assertEquals($response, '[]');
//    }
//
//
//    public function updateFeedingTasksList(FunctionalTester $I)
//    {
//        $date = date('Y-m-d');
//        $I->sendPOST('http://localhost:3015/api/tasks/' . $date . '/update');
//        $I->seeResponseCodeIs(200, 20);
//        $I->sendGet('/api/tasks?Date=' . $date);
//        $response = $I->grabResponse();
//        $etalon = $I->getTasksListString();
//        $j = json_decode($etalon, true);
//        $r = json_decode($response, true);
//        for ($x = 0; $x < 16; $x++) {
//            $I->assertEquals($j[$x]['sections'], $r[$x]['sections']);
//            $I->assertEquals($j[$x]['stores'], $r[$x]['stores']);
//            $I->assertEquals($j[$x]['id'], $r[$x]['id']);
//            $I->assertEquals($j[$x]['feedingNumber'], $r[$x]['feedingNumber']);
//            //$I->assertEquals($j[$x]['waterTargetWeight'], $r[$x]['waterTargetWeight']);
//            //$I->assertEquals($j[$x]['waterActualWeight'], $r[$x]['waterActualWeight']);
//            $I->assertEquals($j[$x]['dailyNumber'], $r[$x]['dailyNumber']);
//            // $I->assertEquals($j[$x]['waterTargetPtoRotation'], $r[$x]['waterTargetPtoRotation']);
//            $I->assertEquals($j[$x]['state'], $r[$x]['state']);
//
//        };
//    }
//
//
//        public function runTask(FunctionalTester $I)
//    {
//        $date = date('Y-m-d');
//        $I->sendPOST('http://localhost:3015/api/tasks/' . $date . '/update');
//        $I->sendPOST('/api/tasks/run?ids=5062');
//        $I->seeResponseCodeIs(200, 20);
//        $I->sendGet('/api/tasks/5062');
//        $response = $I->grabResponse();
//        $r = json_decode($response, true);
//        $I->assertEquals($r['state'], 1);
//
//        }
//    public function cancelTask(FunctionalTester $I)
//    {
//        $date = date('Y-m-d');
//        $I->sendPOST('http://localhost:3015/api/tasks/' . $date . '/update');
//        $I->sendPOST('/api/tasks/run?ids=5062');
//        $I->seeResponseCodeIs(200, 20);
//        $I->sendPOST('/api/tasks/cancel?ids=5062');
//        $I->sendGet('/api/tasks/5062');
//        $response = $I->grabResponse();
//        $r = json_decode($response, true);
//        $I->assertEquals($r['state'], 3);
//
//
//    }
//
//    public function completeTask(FunctionalTester $I)
//    {
//        $date = date('Y-m-d');
//        $I->sendPOST('http://localhost:3015/api/tasks/' . $date . '/update');
//        $I->sendPOST('/api/tasks/run?ids=5055');
//        $I->seeResponseCodeIs(200, 20);
//
//        $I->sendPOST('/api/tasks/complete?ids=5055');
//        $I->sendGet('/api/tasks/5055');
//        $response = $I->grabResponse();
//        $r = json_decode($response, true);
//        $I->assertEquals($r['state'], 2);
//
//
//    }
//
//    public function completeTaskWithActualWeight(FunctionalTester $I)
//    {
//        $date = date('Y-m-d');
//        $I->sendPOST('http://localhost:3015/api/tasks/' . $date . '/update');
//        $I->sendPOST('/api/tasks/run?ids=5063');
//        $I->seeResponseCodeIs(200, 20);
//        $json = '{
//        "sections": [
//            {
//                "sectionId": 9,
//                "weight": 3878,
//                "actualWeight": 3878,
//                "completedAt": "2019-01-21T14:17:37.318+00:00",
//                "section": {
//                    "id": 9,
//                    "name": "Навес",
//                    "feedingPlanId": 9,
//                    "feedingPlan": {
//                        "id": 9,
//                        "name": "Т 2 - 6",
//                        "rationId": 10,
//                        "ration": {
//                            "id": 10,
//                            "name": "Т 2 - 6",
//                            "ingredients": [
//                                {
//                                    "ingredientId": 14,
//                                    "dryWeight": 0.35,
//                                    "ordinalNumber": 0,
//                                    "ptoRotation": 0
//                                },
//                                {
//                                    "ingredientId": 15,
//                                    "dryWeight": 2.1,
//                                    "ordinalNumber": 1,
//                                    "ptoRotation": 0
//                                },
//                                {
//                                    "ingredientId": 2,
//                                    "dryWeight": 0.4,
//                                    "ordinalNumber": 2,
//                                    "ptoRotation": 0
//                                },
//                                {
//                                    "ingredientId": 11,
//                                    "dryWeight": 0.35,
//                                    "ordinalNumber": 3,
//                                    "ptoRotation": 0
//                                },
//                                {
//                                    "ingredientId": 12,
//                                    "dryWeight": 0.8,
//                                    "ordinalNumber": 4,
//                                    "ptoRotation": 0
//                                }
//                            ],
//                            "isPremix": false,
//                            "density": 400,
//                            "waterWeight": 0,
//                            "digiStarInterchangeCode": "T 2 6",
//                            "compensationMode": 0,
//                            "waterPtoRotation": 0
//                        },
//                        "parts": [
//                            1
//                        ]
//                    },
//                    "physiologicalGroups": [
//                        {
//                            "physiologicalGroupId": 8,
//                            "headCount": 374,
//                            "physiologicalGroup": {
//                                "id": 8,
//                                "name": "Т 2-6"
//                            }
//                        }
//                    ],
//                    "appetite": 1.44,
//                    "ordinalNumber": 9,
//                    "digiStarInterchangeCode": "Naves",
//                    "mixerId": 2,
//                    "notCombine": false,
//                    "kind": 0
//                },
//                "actualInitialWeight": 3878,
//                "ordinalNumber": 9
//            }
//        ],
//        "stores": [
//            {
//                "storeId": 8,
//                "weight": 219,
//                "actualWeight": 219,
//                "order": 0,
//                "completedAt": "2019-01-21T14:17:37.318+00:00",
//                "ptoRotations": 0,
//                "actualPtoRotations": 0,
//                "ptoRotationStatus": 0,
//                "store": {
//                    "id": 8,
//                    "name": "Сено",
//                    "ingredientId": 14,
//                    "amount": 12641,
//                    "ingredient": {
//                        "id": 14,
//                        "name": "Сено",
//                        "dryMatter": 0.86,
//                        "type": 3,
//                        "lossType": 0,
//                        "lossCount": 0,
//                        "dynamicDryMatter": false,
//                        "digiStarInterchangeCode": "Seno",
//                        "isUnderweight": false,
//                        "created": "2018-10-22T11:39:27.709+00:00"
//                    },
//                    "ptoRotationStatus": 0
//                },
//                "actualInitialWeight": 219
//            },
//            {
//                "storeId": 7,
//                "weight": 1285,
//                "actualWeight": 1285,
//                "order": 1,
//                "completedAt": "2019-01-21T14:17:37.318+00:00",
//                "ptoRotations": 0,
//                "actualPtoRotations": 0,
//                "ptoRotationStatus": 0,
//                "store": {
//                    "id": 7,
//                    "name": "Комбикорм № 3",
//                    "ingredientId": 15,
//                    "amount": 6926,
//                    "ingredient": {
//                        "id": 15,
//                        "name": "Комбикорм № 3",
//                        "dryMatter": 0.88,
//                        "type": 1,
//                        "lossType": 0,
//                        "lossCount": 0,
//                        "dynamicDryMatter": false,
//                        "digiStarInterchangeCode": "Komb 3",
//                        "isUnderweight": false,
//                        "created": "2018-10-22T11:39:27.493+00:00"
//                    },
//                    "ptoRotationStatus": 0
//                },
//                "actualInitialWeight": 1285
//            },
//            {
//                "storeId": 16,
//                "weight": 245,
//                "actualWeight": 245,
//                "order": 2,
//                "completedAt": "2019-01-21T14:17:37.318+00:00",
//                "ptoRotations": 0,
//                "actualPtoRotations": 0,
//                "ptoRotationStatus": 0,
//                "store": {
//                    "id": 16,
//                    "name": "Комбикорм № 20",
//                    "ingredientId": 2,
//                    "amount": 437246,
//                    "ingredient": {
//                        "id": 2,
//                        "name": "Комбикорм № 20",
//                        "dryMatter": 0.88,
//                        "type": 1,
//                        "lossType": 0,
//                        "lossCount": 0,
//                        "dynamicDryMatter": false,
//                        "digiStarInterchangeCode": "Kom 20",
//                        "isUnderweight": false,
//                        "created": "2018-10-22T11:39:29.378+00:00"
//                    },
//                    "ptoRotationStatus": 0
//                },
//                "actualInitialWeight": 245
//            },
//            {
//                "storeId": 4,
//                "weight": 471,
//                "actualWeight": 471,
//                "order": 3,
//                "completedAt": "2019-01-21T14:17:37.318+00:00",
//                "ptoRotations": 0,
//                "actualPtoRotations": 0,
//                "ptoRotationStatus": 0,
//                "store": {
//                    "id": 4,
//                    "name": "Сенаж 17",
//                    "ingredientId": 11,
//                    "amount": 632336,
//                    "ingredient": {
//                        "id": 11,
//                        "name": "Сенаж",
//                        "dryMatter": 0.4,
//                        "type": 3,
//                        "lossType": 0,
//                        "lossCount": 0,
//                        "dynamicDryMatter": true,
//                        "digiStarInterchangeCode": "Senazh",
//                        "isUnderweight": false,
//                        "created": "2018-10-22T11:39:26.466+00:00"
//                    },
//                    "ptoRotationStatus": 0
//                },
//                "actualInitialWeight": 471
//            },
//            {
//                "storeId": 1,
//                "weight": 1657,
//                "actualWeight": 1657,
//                "order": 4,
//                "completedAt": "2019-01-21T14:17:37.318+00:00",
//                "ptoRotations": 0,
//                "actualPtoRotations": 0,
//                "ptoRotationStatus": 0,
//                "store": {
//                    "id": 1,
//                    "name": "Силос",
//                    "ingredientId": 12,
//                    "amount": 2547973,
//                    "ingredient": {
//                        "id": 12,
//                        "name": "Силос",
//                        "dryMatter": 0.26,
//                        "type": 3,
//                        "lossType": 0,
//                        "lossCount": 0,
//                        "dynamicDryMatter": true,
//                        "digiStarInterchangeCode": "Silos",
//                        "isUnderweight": false,
//                        "created": "2018-10-22T11:39:26.225+00:00"
//                    },
//                    "ptoRotationStatus": 0
//                },
//                "actualInitialWeight": 1657
//            }
//        ],
//        "feedingNumber": 0,
//        "dailyNumber": 16,
//        "date": "2019-01-21",
//        "created": "2019-01-21T14:06:56.375+00:00",
//        "completed": "2019-01-21T14:17:37.318+00:00",
//        "started": "2019-01-21T14:09:39.463+00:00",
//        "state": 2,
//        "mixer": {
//            "id": 2,
//            "name": "15",
//            "volume": 15
//        },
//        "id": 5063
//    }';
//        $I->sendPOST('/api/tasks/5063/setActualWeight', $json);
//
//
//        $I->sendPOST('/api/tasks/complete?ids=5063');
//        $I->sendGet('/api/tasks/5063');
//        $response = $I->grabResponse();
//        $r = json_decode($response, true);
//        $I->assertEquals($r['state'], 2);
//        $I->assertEquals($r['sections'][0]['actualWeight'], 3878);
//        $I->assertEquals($r['stores'][0]['actualWeight'], 219);
//        $I->assertEquals($r['stores'][1]['actualWeight'], 1285);
//        $I->assertEquals($r['stores'][2]['actualWeight'], 245);
//        $I->assertEquals($r['stores'][3]['actualWeight'], 471);
//        $I->assertEquals($r['stores'][4]['actualWeight'], 1657);
//
//
//    }
//
//    public function uploadDigiStarFileForTask(FunctionalTester $I)
//    {   $date = date('Y-m-d');
//        $json = '{mixerId: 2, compoundFeedId: 18, targetWeight: 162, executionDate: "' . $date . '"}';
//        $I->sendPOST('/api/compoundFeedTasks/create', $json);
//        $I->seeResponseCodeIs(200, 20);
//        $I->sendPOST('/api/compoundFeedTasks/1/run');
//        $I->deleteHeader('content-type');
//        $I->sendPOST('http://127.0.0.1:3050/api/v1/compound-feed-tasks',['form-data' => 'files'], ['attachmentFile' => codecept_data_dir('digi_star_combicorm\DS_DONE')]);
//        $etalon = '';
//
//        $I->sendGet('/api/compoundFeedTasks/1');
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $etalon = json_decode($etalon, true);
//        unset($response['startedAt']);
//        unset($response['executionDate']);
//        //  unset($response['startedAt']);
//        unset($etalon['startedAt']);
//        unset($etalon['executionDate']);
//        // unset($etalon['startedAt']);
//        $I->assertEquals($etalon, $response);
//
//    }
//
//
//    public function downloadDigiStarFileForTask(FunctionalTester $I)
//    {   $date = date('Y-m-d');
//        $json = '{mixerId: 2, compoundFeedId: 18, targetWeight: 162, executionDate: "' . $date . '"}';
//        $I->sendPOST('/api/compoundFeedTasks/create', $json);
//        $I->seeResponseCodeIs(200, 20);
//        $I->sendGET('http://127.0.0.1:3050/api/v1/compound-feed-tasks?date=' . $date . '&mixerId=2"');
//        $I->seeResponseCodeIs(200, 20);
//        $I->sendGet('/api/compoundFeedTasks/1');
//        $response = $I->grabResponse();
//        $response = json_decode($response, true);
//        $I->assertEquals('1', $response['status']);
//
//    }
//
//
//
//
//
//
//
//}
