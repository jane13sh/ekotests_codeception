<?php
//
//
//
////FeedingTask
////FeedLeftover
////IngredientsHistory
//
//
//use Helper\Common;
//class AndroidApiCest
//
//
//{
//      private $etalon_feeding_tasks_list = [];
//
//
//    public function _before(FunctionalTester $I)
//    {
//        $I->haveHttpHeader('Content-Type', 'application/json');
//        $I->sendGET('http://127.0.0.1:3021/api/tab/tasks/feed');
//        $I->seeResponseIsJson();
//        $I->seeResponseContains('sections');
//        $this->etalon_feeding_tasks_list = json_decode($I->grabResponse(), true);
//
//    }
//
//
//    public function getEtalonFeedingTasksList(FunctionalTester $I)
//    {
//        $I->sendGET('http://127.0.0.1:3021/api/tab/tasks/feed');
//        $I->seeResponseIsJson();
//        $I->seeResponseContains('sections');
//        $this->etalon_feeding_tasks_list = json_decode($I->grabResponse(), true);
//        //$we = $this->etalon_feeding_tasks_list = json_decode($I->grabResponse(), true);
//
//       // var_dump($we[0]['stores'][1]['loadingState']);
//    }
//
//    public function getTasksListFilterById(FunctionalTester $I)
//    {
//        $etalon_id = $this->etalon_feeding_tasks_list[0]['id'];
//        $etalon_section_name = $this->etalon_feeding_tasks_list[0]['sections'][0]['section']['name'];
//
//        $I->sendGET('http://127.0.0.1:3021/api/tab/tasks/feed?id=' . $etalon_id);
//        $I->seeResponseIsJson();
//        $response = json_decode($I->grabResponse(), true);
//        $id = $response[0]['id'];
//        $section_name = $response[0]['sections'][0]['section']['name'];
//        $I->seeResponseIsJson();
//        $I->assertEquals($id, $etalon_id);
//        $I->assertEquals($etalon_section_name, $section_name);
//
//    }
//
//    public function updateTaskFeedToInProgressState(FunctionalTester $I)
//    {   $json = '[{"value": 4,"path": "state","op": "replace","from": "0"}]';
//        $I->sendPATCH('http://127.0.0.1:3021/api/tab/tasks/feed/' . $this->etalon_feeding_tasks_list[0]['id'],  $json);
//        $I->seeResponseIsJson();
//        $I->seeResponseCodeIs(200);
//        $response = json_decode($I->grabResponse(), true);
//        $I->assertEquals(4, $response['state']);
//    }
//
//    public function updateMixerWeight(FunctionalTester $I)
//    {   $ingredient_weight = '/8';
//        $mixer_id = $this->etalon_feeding_tasks_list[0]['mixer']['id'];
//        $I->sendPATCH('http://127.0.0.1:3021/api/tab/weight/mixer/' . $mixer_id . $ingredient_weight);
//        $I->seeResponseCodeIs(200);
//        //$I->sendGET('http://127.0.0.1:3021/api/tab/weight/' . $mixer_id);
//        $I->seeResponseCodeIs(200);
//
//    }
//
//
//    public function updateIngredientInDoneState(FunctionalTester $I)
//    {   $json = '[{"value": 1,"path": "loadingState","op": "replace","from": "0"}]';
//        $task_id = $this->etalon_feeding_tasks_list[0]['id'];
//        $store_id = $this->etalon_feeding_tasks_list[0]['sections'][0]['section']['feedingPlan']['ration']['ingredients'][0]['ingredientId'];
//        $I->sendPATCH('http://127.0.0.1:3021/api/tab/tasks/feed/' . $task_id . '/stores/' . $store_id,  $json);
//        $I->sendPATCH('http://127.0.0.1:3021/api/tab/tasks/feed/' . $task_id . '/stores/' . '0',  $json);
//        $I->seeResponseCodeIs(200);
//       // $state = $this->etalon_feeding_tasks_list[0]['stores'][0]['loadingState'];
//      //  var_dump($state);
//       // $I->assertEquals(1, $state);
//    }
//
//    public function updateMixerWeightForSection(FunctionalTester $I)
//    {
//        $mixer_id = $this->etalon_feeding_tasks_list[0]['mixer']['id'];
//        $section_weight = '/0';
//        $I->sendPATCH('http://127.0.0.1:3021/api/tab/weight/mixer/0' . $section_weight);
//        // $I->seeResponseIsJson();
//        $I->seeResponseCodeIs(200);
//        // $I->sendGET('http://127.0.0.1:3021/api/tab/weight/' . $mixer_id);
//        $I->seeResponseCodeIs(200);
//    }
//
//
//
//
//    public function updateSectionInDoneState(FunctionalTester $I)
//    {   $json = '[{"value": 1,"path": "UnloadingState","op": "replace","from": "0"}]';
//        $task_id = $this->etalon_feeding_tasks_list[0]['id'];
//        $section_id = $this->etalon_feeding_tasks_list[0]['sections'][0]['section']['feedingPlan']['ration']['ingredients'][0]['ingredientId'];
//        $I->sendPATCH('http://127.0.0.1:3021/api/tab/tasks/feed/' . $task_id . '/sections/' . $section_id,  $json);
//        // $I->seeResponseIsJson();
//        $I->seeResponseCodeIs(200);
//       // $state = $this->etalon_feeding_tasks_list[0]['sections'][0]['unloadingState'];
//       // $I->assertEquals(1, $state);
//    }
//
//
//
//    public function updateTaskFeedToDoneState(FunctionalTester $I)
//    {   $json = '[{"value": 2,"path": "state","op": "replace","from": "1"}]';
//        $I->sendPATCH('http://127.0.0.1:3021/api/tab/tasks/feed/' . $this->etalon_feeding_tasks_list[0]['id'],  $json);
//        $I->seeResponseIsJson();
//        $I->seeResponseCodeIs(200);
//        $response = json_decode($I->grabResponse(), true);
//        $I->assertEquals(2, $response['state']);
//    }
//
//
//    public function assertActualWeightForSection(FunctionalTester $I)
//    {
//        $actualWeight = $this->etalon_feeding_tasks_list[0]['sections'][0]['actualWeight'];
//        $section_weight = 9;
//        $I->assertEquals($actualWeight, $section_weight);
//    }
//
//
//    public function assertActualWeightForIngredient(FunctionalTester $I)
//    {   $ingredient_weight = 8;
//        $actualWeight = $this->etalon_feeding_tasks_list[0]['stores'][0]['actualWeight'];
//        $I->assertEquals($actualWeight, $ingredient_weight);
//    }
//
//
//
//
//
//
//
//
//
//}
