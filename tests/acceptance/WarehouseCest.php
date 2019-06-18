<?php
use Page\Warehouse as WarehousePage;
use Helper\Common;
class WarehouseCest {
    // нужно выносить генератов в helper
    private $warehouseName = null;
    private $warehouseDescription = null;
    private $warehouseWeight = null;

    // перед каждым тестом берем данные из бд, чтобы убедиться в их наличии

    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'sqlite.db';
        $lite_db_name = 'lite.db';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();
        $this->warehouseName = 'Склад ' . date('h:i:s');
        $this->warehouseDescription = 'Описание склада ' . date('l jS \of F Y h:i:s A');
        $this->warehouseWeight = rand(10000, 100000);
    }


    public function _after(AcceptanceTester $I)
    {
        $I->stopApplication();

    }

    public function assertWarehouseListExistTest(AcceptanceTester $I,  \Page\Warehouse $warehousePage)
    {
        $I->wantTo('See on Page Warehouse info from database');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedStorage');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        // ждем появления заголовка
        $I->waitForText('Склад');

        // запрос в БД и получение массива с именем ячейки, воду не сравниваем
        $ingredientStorageUnitsName = $I->getExistingWarehousesIngredientsListAsc();
        // в цикле проходим по таблице из  10 строк, стравнивая значения из таблицы и из
        //базы построчно, начиная с 1, покольку id = 0 Вода
        $y = 1;
        for ($x = 1; $x < 10; $x++) {
            $name_in_base = trim($ingredientStorageUnitsName[$x]['IngredientStorageUnitsName']);
            $name_in_interface = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . $y . ']/td[2]');
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $name_in_interface);
            $y++;
        };

        // запрос в БД и получение массива с описанием ячейки, воду не сравниваем
        $ingredientStorageUnitsDescription = $I->getExistingWarehousesIngredientsListAsc();
        // в цикле проходим по таблице из  10 строк, стравнивая значения из таблицы и из
        //базы построчно, начиная с 1, покольку id = 0 Вода
        $y = 1;
        for ($x = 1; $x < 10; $x++) {
            $name_in_base = trim($ingredientStorageUnitsDescription[$x]['IngredientStorageUnitsDescription']);
            $name_in_interface = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . $y . ']/td[3]');
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $name_in_interface);
            $y++;
        };

        // запрос в БД и получение массива с присвоеным игредиентом ячейке, воду не сравниваем
        $ingredientStorageUnitsNameIngredient = $I->getExistingWarehousesIngredientsListAsc();
        // в цикле проходим по таблице из  10 строк, стравнивая значения из таблицы и из
        //базы построчно, начиная с 1, покольку id = 0 Вода
        $y = 1;
        for ($x = 1; $x < 10; $x++) {
            $name_in_base = trim($ingredientStorageUnitsNameIngredient[$x]['IngredientsName']);
            $name_in_interface = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . $y . ']/td[4]');
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $name_in_interface);
            $y++;
        };

        // запрос в БД и получение массива с весом игредиента в ячейке, воду не сравниваем
        $ingredientStorageUnitsWeight = $I->getExistingWarehousesIngredientsListAsc();
        // в цикле проходим по таблице из  10 строк, стравнивая значения из таблицы и из
        //базы построчно, начиная с 1, покольку id = 0 Вода
        $y = 1;
        for ($x = 1; $x < 10; $x++) {
            $name_in_base = trim($ingredientStorageUnitsWeight[$x]['IngredientStorageUnitsWeight']);
            $name_in_interface = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . $y . ']/td[5]');
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $name_in_interface);
            $y++;
        };
        /* проверка наличия на карточке  информации из БД
              */
    }

    public function createNewWarehouseTest(AcceptanceTester $I, \Page\Warehouse $warehousePage)
    {
        $I->wantTo('Create new Warehouse');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedStorage');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Склад');
        //  с помощью созданного page object спрятали под капот айдишники элементов страницы и просто передаем в них названия полей
        $I->wait(1);
        $warehousePage->addWarehouse($this->warehouseName, $this->warehouseDescription, $this->warehouseWeight);
        $I->wait(1);
        $I->click($warehousePage::$warehouseIngredientField);
        $I->click($warehousePage::$saveButton);
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Запись успешно добавлена', 20);
        // проверяем в бд значение
        $I->seeInDatabase('IngredientStorageUnits', array('Name' => $this->warehouseName));
        $I->seeInDatabase('IngredientStorageUnits', array('Description' => $this->warehouseDescription));

        // Проверяем вес с запросом в БД по одной созданной ячейке
        $ingredientStorageUnitsWeight = $I->getExistingWarehousesIngredientsListDesc();
        //сделана отдельная сортировка т.к. при создании ингредиент отображается первым а в базу заносится последним
        //после обновления страницы отображается так же последним
        $y = 1;
        for ($x = 0; $x < 1; $x++) {
            $name_in_base = trim($ingredientStorageUnitsWeight[$x]['IngredientStorageUnitsWeight']);
            $name_in_interface = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . $y . ']/td[5]');
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $name_in_interface);
            $y++;
        };

        // Проверяем присвоенное значение ингредиента с запросом в БД по одной созданной ячейке
        $ingredientStorageUnitsNameIngredient = $I->getExistingWarehousesIngredientsListDesc();
        //сделана отдельная сортировка т.к. при создании ингредиент отображается первым а в базу заносится последним
        //после обновления страницы отображается так же последним
        $y = 1;
        for ($x = 0; $x < 1; $x++) {
            $name_in_base = trim($ingredientStorageUnitsNameIngredient[$x]['IngredientsName']);
            $name_in_interface = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . $y . ']/td[4]');
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $name_in_interface);
            $y++;
        };
    }
    public function updateWarehouseTest(AcceptanceTester $I, \Page\Warehouse $warehousePage)
    {
        $I->wantTo('Update Warehouse');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedStorage');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Склад');
        //  с помощью созданного page object спрятали под капот айдишники элементов страницы и просто передаем в них названия полей
        $I->wait(1);
        $warehousePage->updateWarehouse($this->warehouseName, $this->warehouseDescription, $this->warehouseWeight);
                $I->wait(1);
        $I->click($warehousePage::$updateWarehouseIngredientField);
        $I->click($warehousePage::$saveButton);
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Запись успешно отредактирована', 20);
        // проверяем в бд значение
        $I->seeInDatabase('IngredientStorageUnits', array('Name' => $this->warehouseName));
        $I->seeInDatabase('IngredientStorageUnits', array('Description' => $this->warehouseDescription));

        // Проверяем вес с запросом в БД по одной созданной ячейке
        $ingredientStorageUnitsWeight = $I->getExistingWarehousesIngredientsListAsc();
        //сделана отдельная сортировка т.к. при создании ингредиент отображается первым а в базу заносится последним
        //после обновления страницы отображается так же последним
        //сравниваем что заполнили с базой данных
        $y = 1;
        for ($x = 1; $x < 1; $x++) {
            $name_in_base = trim($ingredientStorageUnitsWeight[$x]['IngredientStorageUnitsWeight']);
            $warehouseWeight = $this->warehouseWeight;
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $warehouseWeight);
            $y++;
        };

        // Проверяем присвоенное значение ингредиента с запросом в БД по одной созданной ячейке
        $ingredientStorageUnitsNameIngredient = $I->getExistingWarehousesIngredientsListAsc();
        //сделана отдельная сортировка т.к. при создании ингредиент отображается первым а в базу заносится последним
        //сравниваем базу и интерфейс
        //после обновления страницы отображается так же последним
        $y = 1;
        for ($x = 1; $x < 1; $x++) {
            $name_in_base = trim($ingredientStorageUnitsNameIngredient[$x]['IngredientsName']);
            $name_in_interface = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . $y . ']/td[4]');
            var_dump($name_in_base);
            $I->assertEquals($name_in_base, $name_in_interface);
            $y++;
        };
    }
    public function updateNoSaveWarehouseTest(AcceptanceTester $I, \Page\Warehouse $warehousePage)
    {
        $I->wantTo('Update No Save Warehouse');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedStorage');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Склад');
        //  с помощью созданного page object спрятали под капот айдишники элементов страницы и просто передаем в них названия полей
        $I->wait(1);
        $warehousePage->updateWarehouse($this->warehouseName, $this->warehouseDescription, $this->warehouseWeight);
        $I->wait(1);
        $I->click($warehousePage::$updateWarehouseIngredientField);
        //забираем значение присвоенного ингредиента
        $name_in_interface_name_ingredient_update = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[4]');
        $I->click($warehousePage::$noSaveButton);
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        // Проверяем происвоение нового значение ячейке

            $warehouseName = $this->warehouseName;
            $name_in_interface_name = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[2]');
            $I->assertNotEquals($warehouseName, $name_in_interface_name);

            $warehouseDescription = $this->warehouseDescription;
            $name_in_interface_description = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[3]');
            $I->assertNotEquals($warehouseDescription, $name_in_interface_description);

            $warehouseWeight = $this->warehouseWeight;
            $name_in_interface_weight = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[5]');
            $I->assertNotEquals($warehouseWeight, $name_in_interface_weight);

            $name_in_interface_name_ingredient = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[4]');
            $I->assertNotEquals($name_in_interface_name_ingredient, $name_in_interface_name_ingredient_update);


    }
    public function updateTransitionWarehouseTest(AcceptanceTester $I, \Page\Warehouse $warehousePage)
    {
        $I->wantTo('Update No Save and Transition Warehouse');
        $I->reloadPage();
        $I->amOnPage('/#/pages/feedStorage');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Склад');
        //  с помощью созданного page object спрятали под капот айдишники элементов страницы и просто передаем в них названия полей
        $I->wait(1);
        $warehousePage->updateWarehouse($this->warehouseName, $this->warehouseDescription, $this->warehouseWeight);
        $I->wait(1);
        $I->click($warehousePage::$updateWarehouseIngredientField);
        //забираем значение присвоенного ингредиента
        $name_in_interface_name_ingredient_update = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[4]');
        $I->amOnPage('/#/pages/mixer');
        $I->wait(1);
        $I->amOnPage('/#/pages/feedStorage');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Склад');
        // Проверяем происвоение нового значение ячейке

        $warehouseName = $this->warehouseName;
        $name_in_interface_name = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[2]');
        $I->assertNotEquals($warehouseName, $name_in_interface_name);

        $warehouseDescription = $this->warehouseDescription;
        $name_in_interface_description = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[3]');
        $I->assertNotEquals($warehouseDescription, $name_in_interface_description);

        $warehouseWeight = $this->warehouseWeight;
        $name_in_interface_weight = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[5]');
        $I->assertNotEquals($warehouseWeight, $name_in_interface_weight);

        $name_in_interface_name_ingredient = $I->grabTextFrom($warehousePage::$rowInNameWarehouseTable . '/tr[' . 1 . ']/td[4]');
        $I->assertNotEquals($name_in_interface_name_ingredient, $name_in_interface_name_ingredient_update);


    }
}
