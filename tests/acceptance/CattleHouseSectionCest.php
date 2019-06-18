<?php
use Page\CattleHouseSection as CattleHousesPage;
use Helper\Common;
class CattleHouseSectionCest
{
    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'sqlite.db';
        $lite_db_name = 'lite.db';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();

    }
    public function _after(AcceptanceTester $I)
    {
        $I->stopApplication();
    }

    public function assertSectionsListExistTest(AcceptanceTester $I, \Page\CattleHouseSection $sectionsPage)
    {
          $I->wantTo('See on Page cattle House Sections info from database');
          $I->reloadPage();
          $I->amOnPage('/#/pages/cattleHouseSections');
          $I->dontSee('Ошибка');
          $I->dontSee('Bad Request');
          $I->dontSee('Error');
          // ждем появления одной из секций поскольку заколовок загружается раньше
          $I->waitForText('Копытчик');
          // запрос в БД и получение массива с данными секций, воду не сравниваем
          $pens_names = $I->getPensList();
          // в цикле проходим по таблице из  29 строк, стравнивая значения из таблицы и из
          //базы построчно
        $y = 0;
               for ($x = 1; $x < 29; $x++) {
                   $name_in_base = trim($pens_names[$y]['Name']);
                   $name_in_interface = $I->grabTextFrom('//tr[' . $x . ']/td[3]');
                   var_dump($name_in_base);
                   $I->assertEquals($name_in_base, $name_in_interface);
                   $y++;
                   };

 //todo аналогичная проверка для веса  - селект со склада

    }
    public function createSection(AcceptanceTester $I, Page\CattleHouseSection $sectionsPage)
    {
        $I->wantTo('Create new Section');
        $I->reloadPage();
        $I->amOnPage('/#/pages/cattleHouseSections');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Копытчик');
        $I->click($sectionsPage::$addButton);
        $I->fillField($sectionsPage::$sectionNameField, 'new Section');
        $I->fillField($sectionsPage::$sectionDigiStarCodeField, 'sec123');
        $I->fillField($sectionsPage::$sectionAppetiteField, '100');
        $I->selectOption($sectionsPage::$sectionFeedingPlanSelect,'Нетели');
        $I->SelectOption($sectionsPage::$sectionMixerSelect, '15');
        $I->SelectOption($sectionsPage::$section_kind, 'дойные');
        $I->click('//div[@class=\'ui-select-container ui-select-multiple dropdown form-control open\']');
        $I->click('Нетели');
        $I->fillField($sectionsPage::$sectionCount, '35');
        $I->wait(5);
        $I->click('//button[@type=\'submit\']');
        $I->wait(5);
        $I->waitForText('Запись успешно отредактирована', 40);

      // $I->waitForText('Запись успешно добавлена');
        // todo добавить проверку джойном кода dogistar и добавить ксв
        $I->seeInDatabase('Pens', array('Name' => 'new Section'));

    }
    public function updateSection(AcceptanceTester $I, Page\CattleHouseSection $sectionsPage)
    {
        $I->wantTo('update Section');
        $I->reloadPage();
        $I->amOnPage('/#/pages/cattleHouseSections');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Копытчик');
        $I->wait(3);
        $I->click($sectionsPage::$rowSectionsTable . 'tr[9]/td[3]');
        $I->wait(3);
        $I->clearField($sectionsPage::$sectionAppetiteField);
        $I->fillField($sectionsPage::$sectionAppetiteField, '150');
        $I->wait(1);
        $I->click('//button[@type=\'submit\']');
        $I->wait(3);
        $I->click('//button[@type=\'submit\']');
        $I->waitForText('Запись успешно отредактирована', 40);
        // проверяем в бд измененное значение
        $result = $I->getPenSettingsList();

         $I->assertEquals('1.5', $result[8]['Appetite']);




    }

    public function deleteSection(AcceptanceTester $I, Page\CattleHouseSection $sectionsPage)
    {
        $I->wantTo('delete Section');
        $I->reloadPage();
        $I->amOnPage('/#/pages/cattleHouseSections');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('Копытчик');
        $I->wait(3);
        $I->click($sectionsPage::$rowSectionsTable . 'tr[4]/td[1]');
        $I->acceptPopup();
        $I->waitForText('Запись успешно удалена', 25);

    }






}
