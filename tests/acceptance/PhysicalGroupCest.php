<?php
use Page\PhysicalGroup as PhysicalGroupPage;
use Helper\Common;
class PhysicalGroupCest {
    private $physicalGroupName = null;
    Private $physicalGroupDescription = null;
    Private $updatePhysicalGroupName =null;
    Private $updatePhysicalGroupDescription = null;

    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'sqlite.db';
        $lite_db_name = 'lite.db';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();
          $this->physicalGroupName = 'Д ' . date('h:i:s');
          $this->physicalGroupDescription = 'd' . rand(3, 100000) . rand(2, 100000);
          $this->updatePhysicalGroupName = 'Д- 1  дойные ' . date('h:i:s');
          $this->updatePhysicalGroupDescription = 'd дойные' . rand(3, 100000) . rand(2, 100000);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->stopApplication();

    }


    /*
    * Создание Физ. группы и провека созданой физ группы в бд
    *
    */
    public function createNewPhysicalGroupTest(AcceptanceTester $I, \Page\PhysicalGroup $physicalGroupPage)
    {
        $I->wantTo('Create new physicalGroup');
        $I->reloadPage();
        $I->amOnPage('#/pages/physiologicalGroups');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('ФИЗ. ГРУППЫ', 30);
        //  с помощью созданного page object спрятали под капот айдишники элементов страницы и просто передаем в них названия полей
        $physicalGroupPage->addPhysicalGroup($this->physicalGroupName, $this->physicalGroupDescription);
        $I->click($physicalGroupPage::$saveButton);
        $I->waitForText('Запись успешно добавлена');
        // todo добавить проверку джойном появления в БД Физ. группы
        $I->seeInDatabase('PhysiologicalGroups', array('Name' => $this->physicalGroupName));
    }

    /*
    * Создание Физ. группы с уже существующим названием
    *
    */
    public function createNewPhysicalGroupAlreadyExistTest(AcceptanceTester $I, \Page\PhysicalGroup $physicalGroupPage)
    {
        $I->wantTo('Create nat. groups with the same name');
        $I->reloadPage();
        $I->amOnPage('#/pages/physiologicalGroups');
        $I->waitForText('ФИЗ. ГРУППЫ', 30);
        // получаем из БД список физ. груп
        $physicalGroups = $I->getExistingPhysicalGroupsList();
        $physicalGroupPage->addPhysicalGroup($physicalGroups[1]['Name'], $this->physicalGroupName, $this->physicalGroupDescription);
        $I->wait(3);
        $I->click($physicalGroupPage::$saveButton);
        $I->waitForText('Произошла ошибка', 30);
    }


    /*
    * Редактирование Физ. группы и
    *
    */
    public function updatePhysicalGroupAlreadyExistTest(AcceptanceTester $I, \Page\PhysicalGroup $physicalGroupPage)
    {
        $I->wantTo('Find Phys. group and edit');
        $I->reloadPage();
        $I->amOnPage('#/pages/physiologicalGroups');
        $I->waitForText('ФИЗ. ГРУППЫ', 30);
        // получаем из БД список физ. груп и выбираем из массива 2
        $physicalGroups = $I->getExistingPhysicalGroupsList();
        $physicalGroupPage->updatePhysicalGroup($this->updatePhysicalGroupName, $this->updatePhysicalGroupDescription);
        $I->wait(3);
        $I->click($physicalGroupPage::$saveButton);
        $I->waitForText('Запись успешно отредактирована');
        // todo добавить проверку внесенных изменений в БД Физ. группы
        $I->seeInDatabase('PhysiologicalGroups', array('Name' => $this->updatePhysicalGroupName));

    }

    /*
* Редактирование Физ. группы с отменой сохранения
*
*/
    public function updateCancelPhysicalGroupAlreadyExistTest(AcceptanceTester $I, \Page\PhysicalGroup $physicalGroupPage)
    {
        $I->wantTo('Find Phys. group make changes and cancel');
        $I->reloadPage();
        $I->amOnPage('#/pages/physiologicalGroups');
        $I->waitForText('ФИЗ. ГРУППЫ', 30);
        // получаем из БД список физ. груп и выбираем из массива 2
        //$physicalGroups = $I->getExistingPhysicalGroupsList();
        $physicalGroupPage->updatePhysicalGroup($this->updatePhysicalGroupName, $this->updatePhysicalGroupDescription);
        $I->wait(3);
        $I->click($physicalGroupPage::$CancelButton);

        // todo добавить проверку отсутсвия изменений в БД Физ. группы
        $I->dontSeeInDatabase('PhysiologicalGroups', array('Name' => $this->updatePhysicalGroupName));

    }


    /*
    * Редактирование Физ. группы используемой в секции коровника.
    *
    */
    // ищем физ группу используемую в коровнике

}
