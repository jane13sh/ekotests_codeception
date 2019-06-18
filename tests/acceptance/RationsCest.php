<?php
use Page\Rations as RationsPage;
use Helper\Common;
class RationsCest

{
    private  $rationName = null;
    private  $rationDigistarCode =  null;
    private  $rationDensity =  null;
    private  $rationDescription =  null;
    private  $rations_list = null;

    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'sqlite.db';
        $lite_db_name = 'lite.db';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();
        $this->rationName = 'R  ' .  rand(1, 1000);
        $this->rationDigistarCode =  'rd' . rand(3, 100000) . rand(2, 100000);
        $this->rationDensity =  rand(2, 100);
        $this->rationDescription =  'Описание для рациона  ' . date('l jS \of F Y h:i:s A');

    }
    public function _after(AcceptanceTester $I)
    {
        $I->stopApplication();
    }





    public function assertRationListExistTest(AcceptanceTester $I,  \Page\Rations $rationsPage)
    {$I->runApplication();
        $I->wantTo('See on Page Rations info from database');
        $I->amOnPage('/#/pages/rations');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        // ждем появления
        $I->waitForText('РАЦИОНЫ',20);
        $rations = $I->getExistingRationsList();
        $I->wait(3);
        // запрос в БД и получение массива с данными ингредиентов
        // в цикле проходим по таблице из  10 строк, стравнивая значения из таблицы и из
        //базы построчно. x = 0 поскольку первый возвращаемый из бд массив имеет индекс 0
        $I->wait(2);
        $y = 1;
        for ($x = 0; $x < 10; $x++) {
            $name_in_base = $rations[$x]['Name'];
            $name_in_interface = $I->grabTextFrom($rationsPage::$rowInRationsTable . '/tr[' . $y . ']/td[2]');
            $I->assertEquals($name_in_interface, $name_in_base);
            $y++;
        };

        // todo аналогичная проверка для веса  - селект со склада

    }

    public function assertRationInfoExistTest(AcceptanceTester $I,  \Page\Rations $rationsPage)
    {
        $I->wantTo('See on Ration card info from database');
        $I->amOnPage('/#/pages/rations');
        $I->reloadPage();
        // ждем появления заголовка
        $I->waitForText('РАЦИОНЫ');
        $rations = $I->getExistingRationsList();
        $I->waitForText($rations[0]['Name']);
        // запрос в БД и получение массива с данными ингредиентов, пятый рацион втаблице и он же 4й в полученном массиве, к примеру
        $I->click($rationsPage::$rowInRationsTable . '/tr[5]/td[2]');
        $I->seeInField($rationsPage::$rationNameField, $rations[4]['Name']);
        $I->seeInField($rationsPage::$rationDensityField,$rations[4]['Density']);
        $I->seeInField($rationsPage::$rationDescriptionField,$rations[4]['Description']);
        // todo digi star в другой таблице. добавить.
        // получаем список ингредиентов рациона
        $rations_ingredients = $I->getExistingRationIngredientsList($rations[4]['Name']);
        // вычитаем воду(она всегда последняя в бд) получаем количество строк в таблице
        $ingredients_count = count($rations_ingredients ) - 1;
        // y - номер строки в таблице,  x - номер ингредиента в массиве
        $y = 1;
        for ($x = 0; $x < $ingredients_count; $x++) {
            $name_in_base = trim($rations_ingredients[$x]['IName']);
            //$dry_weight_in_base = $rations_ingredients[$x]['DryWeight'];
            //$dry_weight_in_base_str = (string)$dry_weight_in_base;
            $name_in_interface = $I->grabTextFrom($rationsPage::$rowInRationsIngredientTable . '/tr[' . $y . ']/td[3]');
            $I->assertEquals($name_in_interface, $name_in_base);
           // $dry_weight_in_interface = $I->grabTextFrom($rationsPage::$rowInRationsIngredientTable . '/tr[' . $y . ']/td[4]');
            //$I->assertEquals($dry_weight_in_interface, $dry_weight_in_base_str);
            $y++;
        };


    }


    public function createNewRationTest(AcceptanceTester $I, \Page\Rations $rationsPage)
    {
        $I->wantTo('Create new Ration');
        $I->amOnPage('/#/pages/rations');
        $I->waitForText('Рационы');
        $rations = $I->getExistingRationsList();
        $I->waitForText($rations[0]['Name']);
        $rationsPage->addRation($this->rationName, $this->rationDigistarCode, $this->rationDensity, $this->rationDescription);
        $I->click($rationsPage::$saveButton);
        $I->waitForText('Запись успешно отредактирована');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->seeInDatabase('Rations', array('Name' => $this->rationName));


    }

    public function createRationAlreadyExistTest(AcceptanceTester $I,  \Page\Rations $rationsPage)
    {
        $I->wantTo('Create Ration with same name');
        $I->amOnPage('/#/pages/rations');
        $I->reloadPage();
        $I->waitForText('Рационы');
        $rations = $I->getExistingRationsList();
        $I->waitForText($rations[0]['Name']);
        $rationsPage->addRation($this->rationName, $this->rationDigistarCode, $this->rationDensity, $this->rationDescription);
        $I->wait(1);
        $I->click($rationsPage::$saveButton);
        $rationsPage->addRation($this->rationName, $this->rationDigistarCode, $this->rationDensity, $this->rationDescription);
        $I->wait(3);
        $I->click($rationsPage::$saveButton);
        $I->waitForText('Произошла ошибка');

    }


    public function addIngredientInRationAfterDeleteTest(AcceptanceTester $I,  \Page\Rations $rationsPage)
    {
        $I->wantTo('add Ingredient In Ration After Delete');
        // создаем рацион
        $I->amOnPage('/#/pages/rations');
        $I->waitForText('Рационы');
        $I->wait(3);
        $rationsPage->addRation('Рацион', 'r111', '50', 'Описание');
        $I->click($rationsPage::$saveButton);
        $I->waitForText('Запись успешно отредактирована');
        $I->seeInDatabase('Rations', array('Name' => 'Рацион'));
        $I->fillField('//input-filter//input[@placeholder=\'Наименование\']', 'Рацион');
        $I->wait(3);
        $I->click($rationsPage::$rowInRationsTable . '/tr[1]/td[2]');
        $I->wait(3);
        $I->click('Рацион');
        $I->seeInField($rationsPage::$rationNameField, 'Рацион');
        $I->click($rationsPage::$rowInRationsIngredientTable . '/tr[1]/td[2]');
        $I->dontSee('Солома пшеничная');
        $I->click($rationsPage::$saveButton);
        $I->wait(2);

        $I->reloadPage();
        $I->wait(3);
        $I->fillField('//input-filter//input[@placeholder=\'Наименование\']', 'Рацион');
        $I->wait(3);

        $I->click($rationsPage::$rowInRationsTable . '/tr[1]/td[2]');
        $I->click($rationsPage::$rationsIngredientSelect);
        $I->click('Солома пшеничная');
        $I->fillField($rationsPage::$rowInRationsIngredientTable . '/tr[2]/td[4]' . '/div[1]/input[1]', '10');
        $I->click($rationsPage::$saveButton);
        $I->waitForText('Запись успешно отредактирована');
        $I->dontSee('Произошла ошибка');

    }



}
