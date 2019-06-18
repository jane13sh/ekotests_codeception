<?php
use Page\FeedingPlans as FeedingPlansPage;
use Helper\Common;
class FeedingPlansCest
{
    private  $feedingPlanName = null;
    private  $feedingPlanDescription =  null;

    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'sqlite.db';
        $lite_db_name = 'lite.db';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();
        $this->feedingPlanName = 'Расписание  ' .  date('h:i:s');
        $this->feedingPlanDescription =  'Описание для расписания  ' . date('l jS \of F Y h:i:s A');

    }


    public function _after(AcceptanceTester $I)
    {
        $I->stopApplication();

    }


    public function assertFeedingPlansExistTest(AcceptanceTester $I, \Page\FeedingPlans $feedingPlansPage)
    {
        $I->wantTo('See on Page Feeding Plans info from database');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedingPlans');
        $I->waitForText('Нетели');
        // ждем появления
        // запрос в БД и получение массива с данными ингредиентов
        $feedings_plans = $I->getExistingFeedingPlansList();
        // в цикле проходим по таблице из  10 строк, стравнивая значения из таблицы и из
        //базы построчно. x = 0 поскольку первый возвращаемый из бд массив имеет индекс 0
        $I->wait(2);
        $y = 1;
        for ($x = 0; $x < 10; $x++) {
            $name_in_base = $feedings_plans[$x]['Name'];
            $name_in_interface = $I->grabTextFrom($feedingPlansPage::$rowInFeedingPlansTable . '/tr[' . $y . ']/td[2]');
            $I->assertEquals($name_in_interface, $name_in_base);
            $y++;
        };
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');

        // todo аналогичная проверка для веса  - селект со склада

    }

    public function assertFeedingPlanInfoExistTest(AcceptanceTester $I,  \Page\FeedingPlans $feedingPlansPage)
    {
        $I->wantTo('See on feeding Plans card info from database');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedingPlans');
        $I->waitForText('Нетели');
        // ждем появления заголовка
        // сортируем элементы
       // $I->click($feedingPlansPage::$sortFeedingPlansByName);
        //$I->click($feedingPlansPage::$sortFeedingPlansByName);
        // запрос в БД и получение массива с данными ингредиентов
        $feeding_plans = $I->getExistingFeedingPlansList();
        $I->click($feedingPlansPage::$rowInFeedingPlansTable . '/tr[5]/td[2]');
        $I->seeInField($feedingPlansPage::$feedingPlansNameField, 'Т 12 - 18');
       // $I->seeInField($feedingPlansPage::$feedingPlansDescriptionField,$feeding_plans[4]['Description']);
        // todo digi star в другой таблице. добавить.
        //$feeding_parts = $feeding_plans[10]['Parts'];
     //   var_dump($feeding_parts);
    //       string(9) "[0.5,0.5]";  // парсить строку


    }


    public function createNewFeedingPlanTest(AcceptanceTester $I, \Page\FeedingPlans $feedingPlansPage)
    {
        $I->wantTo('Create new feeding plan');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedingPlans');
        $I->waitForText('Нетели');
        $feedingPlansPage->addFeedingPlan($this->feedingPlanName,  $this->feedingPlanDescription);
        $I->wait(3);
//        $I->click($feedingPlansPage::$feedingPlansAddCircle);
//        $I->wait(2);
//        $feed1 = $I->grabTextFrom($feedingPlansPage::$feedingPlans50);
//        $feed2 = $I->grabTextFrom($feedingPlansPage::$feedingPlans100);
//        $I->assertEquals($feed1, 50);
//        $I->assertEquals($feed2, 50);
        $I->click($feedingPlansPage::$saveButton);
        $I->wait(1);
        $I->click($feedingPlansPage::$saveButton);
        $I->waitForText('Запись успешно добавлена');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->seeInDatabase('FeedingPlans', array('Name' => $this->feedingPlanName));


    }

    public function createFeedingPlanAlreadyExistTest(AcceptanceTester $I,  \Page\FeedingPlans $feedingPlansPage)
    {
        $I->wantTo('Create Feedind Plan  with same name');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedingPlans');
        $I->waitForText('Нетели');
        $feedingPlansPage->addFeedingPlan($this->feedingPlanName,  $this->feedingPlanDescription);
        $I->click($feedingPlansPage::$saveButton);
        $I->wait(1);
        $I->click($feedingPlansPage::$saveButton);
        $I->waitForText('Запись успешно добавлена');
        $I->reloadPage();
        $I->waitForText('Нетели');
        $I->wait(1);
        $feedingPlansPage->addFeedingPlan($this->feedingPlanName,  $this->feedingPlanDescription);
        $I->wait(1);
        $I->click($feedingPlansPage::$saveButton);
        $I->wait(1);
        $I->click($feedingPlansPage::$saveButton);
        $I->waitForText('Произошла ошибка',20);

    }




}
