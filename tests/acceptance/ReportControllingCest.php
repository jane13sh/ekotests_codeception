<?php
use Page\ReportControlling as ReportsPage;
use Helper\Common;
class ReportControllingCest{

 private $controllingDate = null;

    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();
        $this->controllingDate = '10.01.2019';
    }


    public function _after(AcceptanceTester $I)
    {
        $I->stopApplication();

    }

    public function reportControlling(AcceptanceTester $I, \Page\ReportControlling $reportsPage)
    {
        $I->wantTo('create report controlling');
        $I->reloadPage();
        $I->amOnPage('/#/pages/controlling');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->waitForText("КОНТРОЛЛИНГ", 20);
        $I->wait(1);
        $reportsPage->controllingDate($this->controllingDate);
        $I->wait(1);
        $I->waitForText('Физиология 1, кормление 1');
       $I->wait(1);

        $assertStroka1 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[1]');
        $assertStroka2 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[2]');
        $assertStroka3 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[3]');
        $assertStroka4 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[4]');
        $assertStroka5 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[5]');
        $assertStroka6 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[6]');
        $assertStroka7 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[7]');
        $assertStroka8 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[8]');
        $assertStroka9 = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[9]');
        $assertStroka10  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[10]');
        $assertStroka11  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[11]');
        $assertStroka12  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[12]');
        $assertStroka13  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[13]');
        $assertStroka14  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[14]');
        $assertStroka15  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[15]');
        $assertStroka16  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[16]');
        $assertStroka17  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[17]');
        $assertStroka18  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[18]');
        $assertStroka19  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[19]');
        $assertStroka20  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[20]');
        $assertStroka21  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[21]');
        $assertStroka22  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[22]');
        $assertStroka23  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[23]');
        $assertStroka24  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[24]');
        $assertStroka25  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[25]');
        $assertStroka26  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[26]');
        $assertStroka27  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[27]');
        $assertStroka28  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[28]');
        $assertStroka29  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[29]');
        $assertStroka30  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[30]');
        $assertStroka31  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[31]');
        $assertStroka32  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[32]');
        $assertStroka33  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[33]');
        $assertStroka34  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[34]');
        $assertStroka35  = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody/tr[35]');
        // $assert = $I->grabTextFrom('/html/body/app/main/pages/div/div/controlling-report/controlling-report-table/div/div[2]/report/table/tbody');

        // убираем пробелы
        //todo если всё загонять в одну строку иногда при сравнении вылетает ошибка, пока закомментировано сравнение по общей таблице

        $assertStroka1 = str_replace(" ", "", $assertStroka1);
        $assertStroka2 = str_replace(" ", "", $assertStroka2);
        $assertStroka3 = str_replace(" ", "", $assertStroka3);
        $assertStroka4 = str_replace(" ", "", $assertStroka4);
        $assertStroka5 = str_replace(" ", "", $assertStroka5);
        $assertStroka6 = str_replace(" ", "", $assertStroka6);
        $assertStroka7 = str_replace(" ", "", $assertStroka7);
        $assertStroka8 = str_replace(" ", "", $assertStroka8);
        $assertStroka9 = str_replace(" ", "", $assertStroka9);
        $assertStroka10 = str_replace(" ", "", $assertStroka10);
        $assertStroka11 = str_replace(" ", "", $assertStroka11);
        $assertStroka12 = str_replace(" ", "", $assertStroka12);
        $assertStroka13 = str_replace(" ", "", $assertStroka13);
        $assertStroka14 = str_replace(" ", "", $assertStroka14);
        $assertStroka15 = str_replace(" ", "", $assertStroka15);
        $assertStroka16 = str_replace(" ", "", $assertStroka16);
        $assertStroka17 = str_replace(" ", "", $assertStroka17);
        $assertStroka18 = str_replace(" ", "", $assertStroka18);
        $assertStroka19 = str_replace(" ", "", $assertStroka19);
        $assertStroka20 = str_replace(" ", "", $assertStroka20);
        $assertStroka21 = str_replace(" ", "", $assertStroka21);
        $assertStroka22 = str_replace(" ", "", $assertStroka22);
        $assertStroka23 = str_replace(" ", "", $assertStroka23);
        $assertStroka24 = str_replace(" ", "", $assertStroka24);
        $assertStroka25 = str_replace(" ", "", $assertStroka25);
        $assertStroka26 = str_replace(" ", "", $assertStroka26);
        $assertStroka27 = str_replace(" ", "", $assertStroka27);
        $assertStroka28 = str_replace(" ", "", $assertStroka28);
        $assertStroka29 = str_replace(" ", "", $assertStroka29);
        $assertStroka30 = str_replace(" ", "", $assertStroka30);
        $assertStroka31 = str_replace(" ", "", $assertStroka31);
        $assertStroka32 = str_replace(" ", "", $assertStroka32);
        $assertStroka33 = str_replace(" ", "", $assertStroka33);
        $assertStroka34 = str_replace(" ", "", $assertStroka34);
        $assertStroka35 = str_replace(" ", "", $assertStroka35);
        //$assert = str_replace(" ", "", $assert);
        //Убираем между строчное пространство
        //$assert = str_replace("\n", "", $assert);
        // Сравниваем значения
        $I->assertEquals($reportsPage::$etalonStroka1, $assertStroka1);
        $I->assertEquals($reportsPage::$etalonStroka2, $assertStroka2);
        $I->assertEquals($reportsPage::$etalonStroka3, $assertStroka3);
        $I->assertEquals($reportsPage::$etalonStroka4, $assertStroka4);
        $I->assertEquals($reportsPage::$etalonStroka5, $assertStroka5);
        $I->assertEquals($reportsPage::$etalonStroka6, $assertStroka6);
        $I->assertEquals($reportsPage::$etalonStroka7, $assertStroka7);
        $I->assertEquals($reportsPage::$etalonStroka8, $assertStroka8);
        $I->assertEquals($reportsPage::$etalonStroka9, $assertStroka9);
        $I->assertEquals($reportsPage::$etalonStroka10, $assertStroka10);
        $I->assertEquals($reportsPage::$etalonStroka11, $assertStroka11);
        $I->assertEquals($reportsPage::$etalonStroka12, $assertStroka12);
        $I->assertEquals($reportsPage::$etalonStroka13, $assertStroka13);
        $I->assertEquals($reportsPage::$etalonStroka14, $assertStroka14);
        $I->assertEquals($reportsPage::$etalonStroka15, $assertStroka15);
        $I->assertEquals($reportsPage::$etalonStroka16, $assertStroka16);
        $I->assertEquals($reportsPage::$etalonStroka17, $assertStroka17);
        $I->assertEquals($reportsPage::$etalonStroka18, $assertStroka18);
        $I->assertEquals($reportsPage::$etalonStroka19, $assertStroka19);
        $I->assertEquals($reportsPage::$etalonStroka20, $assertStroka20);
        $I->assertEquals($reportsPage::$etalonStroka21, $assertStroka21);
        $I->assertEquals($reportsPage::$etalonStroka22, $assertStroka22);
        $I->assertEquals($reportsPage::$etalonStroka23, $assertStroka23);
        $I->assertEquals($reportsPage::$etalonStroka24, $assertStroka24);
        $I->assertEquals($reportsPage::$etalonStroka25, $assertStroka25);
        $I->assertEquals($reportsPage::$etalonStroka26, $assertStroka26);
        $I->assertEquals($reportsPage::$etalonStroka27, $assertStroka27);
        $I->assertEquals($reportsPage::$etalonStroka28, $assertStroka28);
        $I->assertEquals($reportsPage::$etalonStroka29, $assertStroka29);
        $I->assertEquals($reportsPage::$etalonStroka30, $assertStroka30);
        $I->assertEquals($reportsPage::$etalonStroka31, $assertStroka31);
        $I->assertEquals($reportsPage::$etalonStroka32, $assertStroka32);
        $I->assertEquals($reportsPage::$etalonStroka33, $assertStroka33);
        $I->assertEquals($reportsPage::$etalonStroka34, $assertStroka34);
        $I->assertEquals($reportsPage::$etalonStroka35, $assertStroka35);
        //$I->assertEquals($reportsPage::$etalon, $assert);


    }
}
