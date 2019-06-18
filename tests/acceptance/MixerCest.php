<?php
use Page\Mixers as MixersPage;
use Helper\Common;
class MixerCest
{

    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'sqlite.db"';
        $lite_db_name = 'lite.db"';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();
    }


    public function _after(AcceptanceTester $I)

    {
        $I->stopApplication();
    }


    public function assertMixersListExistTest(AcceptanceTester $I, \Page\Mixers $mixersPage)
    {
        $I->wantTo('See on Page Mixers info from database');
        $I->reloadPage();
        $I->amOnPage('/#/pages/mixer');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        // ждем появления миксеров
        $I->waitForText('30');
        // запрос в БД и получение массива с данными секций, воду не сравниваем
        $name = $I->grabTextFrom('/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[1]/td[2]/ng2-smart-table-cell[1]/table-cell-view-mode[1]/div[1]/div[1]');
        $I->assertEquals($name, '30');
        $name = $I->grabTextFrom('/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[2]/td[2]/ng2-smart-table-cell[1]/table-cell-view-mode[1]/div[1]/div[1]');
        $I->assertEquals($name, '15');
        $vol = $I->grabTextFrom('/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[1]/td[4]/ng2-smart-table-cell[1]/table-cell-view-mode[1]/div[1]/div[1]');
        $I->assertEquals($vol, '30');
        $vol = $I->grabTextFrom('/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[2]/td[4]/ng2-smart-table-cell[1]/table-cell-view-mode[1]/div[1]/div[1]');
        $I->assertEquals($vol, '15');

        //todo аналогичная проверка для веса  - селект со склада

    }
    public function createMixer(AcceptanceTester $I, \Page\Mixers $mixersPage)
    {
        $I->wantTo('Create new Mixer');
        $I->reloadPage();
        $I->amOnPage('/#/pages/mixer');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('30',20);
        $I->click($mixersPage::$mixersAddButton);
        $I->fillField('//div[@class=\'form-group has-feedback\']//input[@placeholder=\'Наименование\']', 'Mixxer');
        $I->fillField('//div[@class=\'form-group has-feedback\']//input[@placeholder=\'Объем (м3)\']', 100);
        $I->click($mixersPage::$mixersSaveButton);
        $I->waitForText('Запись успешно добавлена', 15);
        $I->seeInDatabase('Mixers', array('Name' => 'Mixxer'));
        $I->seeInDatabase('Mixers', array('Volume' => '100'));

    }
    public function updateMixer(AcceptanceTester $I, \Page\Mixers $mixersPage)
    {
        $I->wantTo('update mixer');
        $I->reloadPage();
        $I->amOnPage('/#/pages/mixer');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->wait(3);
        $I->click($mixersPage::$mixers1UpdateButton);
        $I->wait(3);
        $I->clearField('//div[@class=\'form-group has-feedback\']//input[@placeholder=\'Наименование\']');
        $I->fillField('//div[@class=\'form-group has-feedback\']//input[@placeholder=\'Наименование\']', '30 upd');
        $I->wait(1);
        $I->click($mixersPage::$mixersSaveButton);
        $I->wait(3);
        $I->waitForText('Запись успешно отредактирована', 40);
        // проверяем в бд измененное значение
        $I->seeInDatabase('Mixers', array('Name' => '30 upd'));




    }

    public function deleteMixer(AcceptanceTester $I, \Page\Mixers $mixersPage)
    {
        $I->wantTo('delete Mixer');
        $I->reloadPage();
        $I->amOnPage('/#/pages/mixer');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText('30');
        $I->wait(3);
        $I->click('//tr[2]/td/ng2-st-tbody-edit-delete/a[2]/i');
        $I->acceptPopup();
        $I->waitForText('Запись успешно удалена', 25);
        $I->dontSeeElement('//tr[2]/td/ng2-st-tbody-edit-delete/a[2]/i');

    }

}
