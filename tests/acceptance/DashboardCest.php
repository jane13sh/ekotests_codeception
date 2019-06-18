<?php
use Page\Dashboard as DashboardPage;
use Helper\Common;
// проверка наличия некоторых элементов на главной странице
class DashboardCest
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



    public function assertElementsPresentOnDashboard(AcceptanceTester $I, \Page\Dashboard $dashboardPage )
    {
        $I->wantTo('See on dashboard some info');
        $I->reloadPage();
        $I->amOnPage('#/pages/dashboard');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        // ждем появления одной из секций поскольку заколовок загружается раньше
        $I->waitForText('Солома пшеничная', 20);
        $I->seeInField($dashboardPage::$dashboardSenajKSVField, '40');
        $I->seeInField($dashboardPage::$dashboardSilosKSVField, '26');

        // наличие секций тренда аппетита
        for ($x = 1; $x < 29; $x++) {

            $I->seeElement($dashboardPage::$dashboardAppetiteTrend . '[' . $x . ']');
        };

        // наличие блока ОСТАТКИ ПО ДНЯМи пяти его составляющих
        for ($x = 1; $x < 5; $x++) {

            $I->seeElement('//div[@class=\'channels-info\']//div//div[' . $x . ']//p[1]');
        };




    }
}
