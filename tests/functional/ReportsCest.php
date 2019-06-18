<?php
use Helper\Functional;
use Helper\ReportsEtalons;
use Helper\Common;
class ReportsCest
{
    public function _before(FunctionalTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');

    }

    // tests
    public function _after(FunctionalTester $I)
    {
        $I->stopApplication();
    }
 public function controllingReport(FunctionalTester $I)
        //Отчёт для отдела Контроллинга
    { // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/controllingReports/json/2019-01-10');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $controlling_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_controlling_report = $I->getControllingReportJson();
        $etalon_controlling_report = json_decode($etalon_controlling_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
        unset($etalon_controlling_report['reportHeader']['rightAlignedText']);
        unset($etalon_controlling_report['reportHeader']['toArray'][2]);
        unset($etalon_controlling_report['runningTitle']['rightAlignedText']);
        unset($controlling_report['reportHeader']['rightAlignedText']);
        unset($controlling_report['reportHeader']['toArray'][2]);
        unset($controlling_report['runningTitle']['rightAlignedText']);
        // сравниваем
        $I->assertEquals($etalon_controlling_report, $controlling_report);
//  GET http://localhost:56541/api/controllingReports/json/2019-01-10
    }
    public function cutoffFalseKkReport(FunctionalTester $I)
        //Списание 1С без раскрытия комбикорма
    { // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/cutoffReports/json/2019-01-10?isDecomposedCompoundFeed=false');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $cutoffFalseKk_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_cutoffFalseKk_report = $I->cutoffFalseKkReportJson();
        $etalon_cutoffFalseKk_report = json_decode($etalon_cutoffFalseKk_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
        unset($etalon_cutoffFalseKk_report['reportHeader']['rightAlignedText']);
        unset($etalon_cutoffFalseKk_report['reportHeader']['toArray'][2]);
        unset($etalon_cutoffFalseKk_report['runningTitle']['rightAlignedText']);
        unset($cutoffFalseKk_report['reportHeader']['rightAlignedText']);
        unset($cutoffFalseKk_report['reportHeader']['toArray'][2]);
        unset($cutoffFalseKk_report['runningTitle']['rightAlignedText']);
        // сравниваем
        $I->assertEquals($etalon_cutoffFalseKk_report, $cutoffFalseKk_report);
//GET http://localhost:56541/api/cutoffReports/json/2019-01-10?isDecomposedCompoundFeed=false
    }
    public function cutoffTrueKkReport(FunctionalTester $I)
        //Списание 1С с раскрытием комбикорма
    { // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/cutoffReports/json/2019-01-10?isDecomposedCompoundFeed=true');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $cutoffTrueKk_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_cutoffTrueKk_report = $I->cutoffTrueKkReportJson();
        $etalon_cutoffTrueKk_report = json_decode($etalon_cutoffTrueKk_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
        unset($etalon_cutoffTrueKk_report['reportHeader']['rightAlignedText']);
        unset($etalon_cutoffTrueKk_report['reportHeader']['toArray'][2]);
        unset($etalon_cutoffTrueKk_report['runningTitle']['rightAlignedText']);
        unset($cutoffTrueKk_report['reportHeader']['rightAlignedText']);
        unset($cutoffTrueKk_report['reportHeader']['toArray'][2]);
        unset($cutoffTrueKk_report['runningTitle']['rightAlignedText']);
        // сравниваем
        $I->assertEquals($etalon_cutoffTrueKk_report, $cutoffTrueKk_report);
        //Todo доделать инфу с чекбоксом (поменять запрос)
//GET http://localhost:56541/api/cutoffReports/json/2019-01-10?isDecomposedCompoundFeed=true
    }
  
    public function dryConsumptionsSectionsReports(FunctionalTester $I)
        //Потребление СВ
{ // копируем две бд подряд в папку с релизом
    $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
    $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
    $I->haveHttpHeader('Content-Type', 'application/json');
    $I->updateSQLDataBase($sql_db_name);
    $I->updateLiteDataBase($lite_db_name);
    //запускаем приложение
    $I->runApplication();
    // проверяем что оно поднялось
    $I->checkApplication();
    // шлем запрос на нужную дату
    $I->sendGET('http://localhost:56541/api/dryConsumptionsSectionsReports/json/2019-01-10/2019-01-11');
    // проверяем код ответа
    $I->seeResponseCodeIs(200);
    // проверяем, что ответ пришел в нужном формате
    $I->seeResponseIsJson();
    // выгребаем ответ, пришедший на запрос
    $response = $I->grabResponse();
    // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
    $dryConsumptionsSections_report = json_decode($response, true);
    // забираем эталонныый json и тоже преобразуем в массив
    $etalon_dryConsumptionsSections_report = $I->dryConsumptionsSectionsReportsJson();
    //unset($etalon_dryConsumptionsSections_report['reportHeader']['table']['rows']['16']['cells']['0']['value']);
    $etalon_dryConsumptionsSections_report = json_decode($etalon_dryConsumptionsSections_report, true);
    // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
    // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
    //todo победить "\\" в записанном ранее json
    unset($etalon_dryConsumptionsSections_report['reportHeader']['rightAlignedText']);
    unset($etalon_dryConsumptionsSections_report['reportHeader']['toArray'][2]);
    unset($etalon_dryConsumptionsSections_report['runningTitle']['rightAlignedText']);
    unset($etalon_dryConsumptionsSections_report['table']['rows']['16']['cells']['0']['value']);
    unset($dryConsumptionsSections_report['reportHeader']['rightAlignedText']);
    unset($dryConsumptionsSections_report['reportHeader']['toArray'][2]);
    unset($dryConsumptionsSections_report['runningTitle']['rightAlignedText']);
    unset($dryConsumptionsSections_report['table']['rows']['16']['cells']['0']['value']);
    // сравниваем
    $I->assertEquals($etalon_dryConsumptionsSections_report, $dryConsumptionsSections_report);
//GET http://localhost:56541/api/dryConsumptionsSectionsReports/json/2019-01-10/2019-01-11
}
  
  
  public function dryConsumptionsRationsReports(FunctionalTester $I)
        //Потребление СВ по рациону
    { // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/DryConsumptionsRationsReports/json/2019-01-10/2019-01-11');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $dryConsumptionsRations_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_dryConsumptionsRations_report = $I->dryConsumptionsRationsReportsJson();
        $etalon_dryConsumptionsRations_report = json_decode($etalon_dryConsumptionsRations_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
        unset($etalon_dryConsumptionsRations_report['reportHeader']['rightAlignedText']);
        unset($etalon_dryConsumptionsRations_report['reportHeader']['toArray'][2]);
        unset($etalon_dryConsumptionsRations_report['runningTitle']['rightAlignedText']);
        unset($dryConsumptionsRations_report['reportHeader']['rightAlignedText']);
        unset($dryConsumptionsRations_report['reportHeader']['toArray'][2]);
        unset($dryConsumptionsRations_report['runningTitle']['rightAlignedText']);
        // сравниваем
        $I->assertEquals($etalon_dryConsumptionsRations_report, $dryConsumptionsRations_report);
//GET http://localhost:56541/api/DryConsumptionsRationsReports/json/2019-01-10/2019-01-11
    }
    public function planResourcesTrueKkReport(FunctionalTester $I)
         //Потребность запасов с раскладкой комбикормов на ингредиенты
   {   // копируем две бд подряд в папку с релизом
       $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
       $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
       $I->haveHttpHeader('Content-Type', 'application/json');
       $I->updateSQLDataBase($sql_db_name);
       $I->updateLiteDataBase($lite_db_name);
       //запускаем приложение
       $I->runApplication();
       // проверяем что оно поднялось
       $I->checkApplication();
       // шлем запрос на нужную дату
       $I->sendGET('http://localhost:56541/api/planResourcesReports/json/2019-01-11/2019-02-11?isDecomposedCompoundFeed=true');
       // проверяем код ответа
       $I->seeResponseCodeIs(200);
       // проверяем, что ответ пришел в нужном формате
       $I->seeResponseIsJson();
       // выгребаем ответ, пришедший на запрос
       $response = $I->grabResponse();
       // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
       $planResourcesTrueKk_report = json_decode($response, true);
       // забираем эталонныый json и тоже преобразуем в массив
       $etalon_planResourcesTrueKk_report = $I->planResourcesTrueKkReportJson();
       $etalon_planResourcesTrueKk_report = json_decode($etalon_planResourcesTrueKk_report, true);
       // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
       // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
       unset($etalon_planResourcesTrueKk_report['name']);
       unset($etalon_planResourcesTrueKk_report['reportHeader']['rightAlignedText']);
       unset($etalon_planResourcesTrueKk_report['reportHeader']['toArray'][2]);
       unset($etalon_planResourcesTrueKk_report['runningTitle']['rightAlignedText']);

       unset($planResourcesTrueKk_report['name']);
       unset($planResourcesTrueKk_report['reportHeader']['rightAlignedText']);
       unset($planResourcesTrueKk_report['reportHeader']['toArray'][2]);
       unset($planResourcesTrueKk_report['runningTitle']['rightAlignedText']);
       // сравниваем
       $I->assertEquals($etalon_planResourcesTrueKk_report, $planResourcesTrueKk_report);
       //Get http://localhost:56541/api/planResourcesReports/json/2019-01-11/2019-02-11?isDecomposedCompoundFeed=true
    }
    public function planResourcesFalseKkReport(FunctionalTester $I)
        //Потребность запасов без раскладкой комбикормов на ингредиенты
    {   // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/planResourcesReports/json/2019-01-11/2019-02-11?isDecomposedCompoundFeed=false');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $planResourcesFalseKk_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_planResourcesFalseKk_report = $I->planResourcesFalseKkReportJson();
        $etalon_planResourcesFalseKk_report = json_decode($etalon_planResourcesFalseKk_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
        unset($etalon_planResourcesFalseKk_report['name']);
        unset($etalon_planResourcesFalseKk_report['reportHeader']['rightAlignedText']);
        unset($etalon_planResourcesFalseKk_report['reportHeader']['toArray'][2]);
        unset($etalon_planResourcesFalseKk_report['runningTitle']['rightAlignedText']);

        unset($planResourcesFalseKk_report['name']);
        unset($planResourcesFalseKk_report['reportHeader']['rightAlignedText']);
        unset($planResourcesFalseKk_report['reportHeader']['toArray'][2]);
        unset($planResourcesFalseKk_report['runningTitle']['rightAlignedText']);
        // сравниваем
        $I->assertEquals($etalon_planResourcesFalseKk_report, $planResourcesFalseKk_report);
        //Get http://localhost:56541/api/planResourcesReports/json/2019-01-11/2019-02-11?isDecomposedCompoundFeed=False
    }
     public function sectionUnloadReport(FunctionalTester $I)
         //Раздача по секциям
     {   // копируем две бд подряд в папку с релизом
         $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
         $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
         $I->haveHttpHeader('Content-Type', 'application/json');
         $I->updateSQLDataBase($sql_db_name);
         $I->updateLiteDataBase($lite_db_name);
         //запускаем приложение
         $I->runApplication();
         // проверяем что оно поднялось
         $I->checkApplication();
         // шлем запрос на нужную дату
         $I->sendGET('http://localhost:56541/api/sectionUnloadReports/json/2019-01-10/2019-01-11');
         // проверяем код ответа
         $I->seeResponseCodeIs(200);
         // проверяем, что ответ пришел в нужном формате
         $I->seeResponseIsJson();
         // выгребаем ответ, пришедший на запрос
         $response = $I->grabResponse();
         // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
         $sectionUnload_report = json_decode($response, true);
         // забираем эталонныый json и тоже преобразуем в массив
         $etalon_sectionUnload_report = $I->sectionUnloadReportJson();
         $etalon_sectionUnload_report = json_decode($etalon_sectionUnload_report, true);
         // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
         // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
         unset($etalon_sectionUnload_report['reportHeader']['rightAlignedText']);
         unset($etalon_sectionUnload_report['reportHeader']['toArray'][2]);
         unset($etalon_sectionUnload_report['runningTitle']['rightAlignedText']);
         unset($sectionUnload_report['reportHeader']['rightAlignedText']);
         unset($sectionUnload_report['reportHeader']['toArray'][2]);
         unset($sectionUnload_report['runningTitle']['rightAlignedText']);
         // сравниваем
         $I->assertEquals($etalon_sectionUnload_report, $sectionUnload_report);
//  GET http://localhost:56541/api/sectionUnloadReports/json/2019-01-10/2019-01-11
   }
    public function totalLoadTimeReport(FunctionalTester $I)
        //Время загрузки и раздачи
    {   // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/totalLoadTimeReport/json/2019-01-10/2019-01-10');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $totalLoadTime_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_totalLoadTime_report = $I->totalLoadTimeReportJson();
        $etalon_totalLoadTime_report = json_decode($etalon_totalLoadTime_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
        unset($etalon_totalLoadTime_report['reportHeader']['rightAlignedText']);
        unset($etalon_totalLoadTime_report['reportHeader']['toArray'][2]);
        unset($etalon_totalLoadTime_report['runningTitle']['rightAlignedText']);
        unset($totalLoadTime_report['reportHeader']['rightAlignedText']);
        unset($totalLoadTime_report['reportHeader']['toArray'][2]);
        unset($totalLoadTime_report['runningTitle']['rightAlignedText']);
        // сравниваем
        $I->assertEquals($etalon_totalLoadTime_report, $totalLoadTime_report);
//  GET http://localhost:56541/api/totalLoadTimeReport/json/2019-01-10/2019-01-10
    }
     public function rationSpecificationTrueReport(FunctionalTester $I)
         //Спецификация рациона с раскладкой комбикорма на ингредиенты
     {   // копируем две бд подряд в папку с релизом
         $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
         $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
         $I->haveHttpHeader('Content-Type', 'application/json');
         $I->updateSQLDataBase($sql_db_name);
         $I->updateLiteDataBase($lite_db_name);
         //запускаем приложение
         $I->runApplication();
         // проверяем что оно поднялось
         $I->checkApplication();
         // шлем запрос на нужную дату
         $I->sendGET('http://localhost:56541/api/rationSpecificationReport/json?isDecomposedCompoundFeed=true');
         // проверяем код ответа
         $I->seeResponseCodeIs(200);
         // проверяем, что ответ пришел в нужном формате
         $I->seeResponseIsJson();
         // выгребаем ответ, пришедший на запрос
         $response = $I->grabResponse();
         // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
         $rationSpecificationTrue_report = json_decode($response, true);
         // забираем эталонныый json и тоже преобразуем в массив
         $etalon_rationSpecificationTrue_report = $I->rationSpecificationTrueReportJson();
         $etalon_rationSpecificationTrue_report = json_decode($etalon_rationSpecificationTrue_report, true);
         // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
         // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
         unset($etalon_rationSpecificationTrue_report['reportHeader']['centeredText']);
         unset($etalon_rationSpecificationTrue_report['reportHeader']['rightAlignedText']);
         unset($etalon_rationSpecificationTrue_report['reportHeader']['toArray'][1]);
         unset($etalon_rationSpecificationTrue_report['reportHeader']['toArray'][2]);
         unset($etalon_rationSpecificationTrue_report['name']);
         unset($etalon_rationSpecificationTrue_report['runningTitle']['centeredText']);
         unset($etalon_rationSpecificationTrue_report['runningTitle']['rightAlignedText']);

         unset($rationSpecificationTrue_report['reportHeader']['centeredText']);
         unset($rationSpecificationTrue_report['reportHeader']['rightAlignedText']);
         unset($rationSpecificationTrue_report['reportHeader']['toArray'][1]);
         unset($rationSpecificationTrue_report['reportHeader']['toArray'][2]);
         unset($rationSpecificationTrue_report['name']);
         unset($rationSpecificationTrue_report['runningTitle']['centeredText']);
         unset($rationSpecificationTrue_report['runningTitle']['rightAlignedText']);
         // сравниваем
         $I->assertEquals($etalon_rationSpecificationTrue_report, $rationSpecificationTrue_report);
//  GET http://localhost:56541/api/rationSpecificationReport/json?isDecomposedCompoundFeed=true
     }
    public function rationSpecificationFalseReport(FunctionalTester $I)
        //Спецификация рациона без раскладки комбикорма на ингредиенты
    {   // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        http://localhost:56541/api/totalLoadTimeReport/json/2019-01-10/2019-01-10
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/rationSpecificationReport/json?isDecomposedCompoundFeed=False');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $rationSpecificationFalse_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_rationSpecificationFalse_report = $I->rationSpecificationFalseReportJson();
        $etalon_rationSpecificationFalse_report = json_decode($etalon_rationSpecificationFalse_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив могут быть другмими)
        unset($etalon_rationSpecificationFalse_report['reportHeader']['centeredText']);
        unset($etalon_rationSpecificationFalse_report['reportHeader']['rightAlignedText']);
        unset($etalon_rationSpecificationFalse_report['reportHeader']['toArray'][1]);
        unset($etalon_rationSpecificationFalse_report['reportHeader']['toArray'][2]);
        unset($etalon_rationSpecificationFalse_report['name']);
        unset($etalon_rationSpecificationFalse_report['runningTitle']['centeredText']);
        unset($etalon_rationSpecificationFalse_report['runningTitle']['rightAlignedText']);

        unset($rationSpecificationFalse_report['reportHeader']['centeredText']);
        unset($rationSpecificationFalse_report['reportHeader']['rightAlignedText']);
        unset($rationSpecificationFalse_report['reportHeader']['toArray'][1]);
        unset($rationSpecificationFalse_report['reportHeader']['toArray'][2]);
        unset($rationSpecificationFalse_report['name']);
        unset($rationSpecificationFalse_report['runningTitle']['centeredText']);
        unset($rationSpecificationFalse_report['runningTitle']['rightAlignedText']);
        // сравниваем
        $I->assertEquals($etalon_rationSpecificationFalse_report, $rationSpecificationFalse_report);
//  GET http://localhost:56541/api/rationSpecificationReport/json?isDecomposedCompoundFeed=False
    }

 
    public function loadReport(FunctionalTester $I)
    { // загрузка
//  GET http://localhost:56541/api/loadDeliveryDiff/2019-01-22/2019-01-22
//        // http://localhost:56541/api/loadReports/json/2019-01-22/2019-01-22
//       // http://127.0.0.1:3021/api/tasks?date=2019-01-22
       // копируем две бд подряд в папку с релизом
       $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
       $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
       $I->haveHttpHeader('Content-Type', 'application/json');
       $I->updateSQLDataBase($sql_db_name);
       $I->updateLiteDataBase($lite_db_name);
       //запускаем приложение
       $I->runApplication();
       // проверяем что оно поднялось
       $I->checkApplication();
       // шлем запрос на нужную дату
       $I->sendGET('http://localhost:56541/api/loadReports/json/2019-01-10/2019-01-10');
       // проверяем код ответа
       $I->seeResponseCodeIs(200);
       // проверяем, что ответ пришел в нужном формате
       $I->seeResponseIsJson();
       // выгребаем ответ, пришедший на запрос
       $response = $I->grabResponse();
       // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
       $loadReport_report = json_decode($response, true);
       // забираем эталонныый json и тоже преобразуем в массив
       $etalon_loadReport_report = $I->getloadReportJson();
       $etalon_loadReport_report = json_decode($etalon_loadReport_report, true);
       // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
       // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив амогут быть другмими)/* unset($etalon_loadReport_report['reportHeader']['leftAlignedText']);
       unset($etalon_loadReport_report['0']['reportHeader']);
       unset($etalon_loadReport_report['0']['runningTitle']);
       unset($etalon_loadReport_report['0']['runningTitle']);
       unset($etalon_loadReport_report['1']['reportHeader']);
       unset($etalon_loadReport_report['1']['runningTitle']);
       unset($etalon_loadReport_report['1']['runningTitle']);
       unset($loadReport_report['0']['reportHeader']);
       unset($loadReport_report['0']['runningTitle']);
       unset($loadReport_report['0']['runningTitle']);
       unset($loadReport_report['1']['reportHeader']);
       unset($loadReport_report['1']['runningTitle']);
     // сравниваем
     //  print_r(array_diff_key($etalon_loadReport_report, $loadReport_report));
       $I->assertEquals($etalon_loadReport_report, $loadReport_report);
    }

    //todo Отчет не работает на неконвертированной бд
//    public function loadReportsCompoundFeed(FunctionalTester $I)
//        // загрузка комбикорм
//    { // загрузка комбикорм http://localhost:56541/api/loadReportsCompoundFeed/json/2019-01-25/2019-01-25
//        // копируем две бд подряд в папку с релизом
//        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
//        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
//        $I->haveHttpHeader('Content-Type', 'application/json');
//        $I->updateSQLDataBase($sql_db_name);
//        $I->updateLiteDataBase($lite_db_name);
//        //запускаем приложение
//        $I->runApplication();
//        // проверяем что оно поднялось
//        $I->checkApplication();
//        // шлем запрос на нужную дату
//        $I->sendGET('http://localhost:56541/api/loadReportsCompoundFeed/json/2019-01-10/2019-01-10');
//        // проверяем код ответа
//        $I->seeResponseCodeIs(200);
//        // проверяем, что ответ пришел в нужном формате
//        $I->seeResponseIsJson();
//        // выгребаем ответ, пришедший на запрос
//        $response = $I->grabResponse();
//        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
//        $loadReportsCompoundFeed_report = json_decode($response, true);
//        // забираем эталонныый json и тоже преобразуем в массив
//        $etalon_loadReportsCompoundFeed_report = $I->getloadReportsCompoundFeedJson();
//        $etalon_loadReportsCompoundFeed_report = json_decode($etalon_loadReportsCompoundFeed_report, true);
//        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
//        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив амогут быть другмими)/* unset($etalon_loadReport_report['reportHeader']['leftAlignedText']);
//        unset($etalon_loadReportsCompoundFeed_report[0]['reportHeader']['rightAlignedText']);
//        unset($etalon_loadReportsCompoundFeed_report[0]['reportHeader']['toArray']['2']);
//        unset($etalon_loadReportsCompoundFeed_report[0]['runningTitle']['rightAlignedText']);
//        unset($etalon_loadReportsCompoundFeed_report[1]['reportHeader']['rightAlignedText']);
//        unset($etalon_loadReportsCompoundFeed_report[1]['reportHeader']['toArray']['2']);
//        unset($etalon_loadReportsCompoundFeed_report[1]['runningTitle']['rightAlignedText']);
//        unset($loadReportsCompoundFeed_report['0']['reportHeader']['rightAlignedText']);
//        unset($loadReportsCompoundFeed_report['0']['reportHeader']['toArray']['2']);
//        unset($loadReportsCompoundFeed_report['0']['runningTitle']['rightAlignedText']);
//        unset($loadReportsCompoundFeed_report['1']['reportHeader']['rightAlignedText']);
//        unset($loadReportsCompoundFeed_report['1']['reportHeader']['toArray']['2']);
//        unset($loadReportsCompoundFeed_report['1']['runningTitle']['rightAlignedText']);
//        // сравниваем
//        //  print_r(array_diff_key($etalon_loadReport_report, $loadReport_report));
//        $I->assertEquals($etalon_loadReportsCompoundFeed_report, $loadReportsCompoundFeed_report);
//    }
    public function loadIngredientsReport(FunctionalTester $I)
    {   // загрузка расширенный
//  GET http://localhost:56541/api/loadDeliveryDiffExtended/2019-01-22/2019-01-22      http://localhost:56541/api/loadReportsExtended/json/2019-01-22/2019-01-22
       // копируем две бд подряд в папку с релизом
       $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
       $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
       $I->haveHttpHeader('Content-Type', 'application/json');
       $I->updateSQLDataBase($sql_db_name);
       $I->updateLiteDataBase($lite_db_name);
       //запускаем приложение
       $I->runApplication();
       // проверяем что оно поднялось
       $I->checkApplication();
       // шлем запрос на нужную дату
       $I->sendGET('http://localhost:56541/api/loadReportsExtended/json/2019-01-10/2019-01-10');
       // проверяем код ответа
       $I->seeResponseCodeIs(200);
       // проверяем, что ответ пришел в нужном формате
       $I->seeResponseIsJson();
       // выгребаем ответ, пришедший на запрос
       $response = $I->grabResponse();
       // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
       $loadIngredientsReport_report = json_decode($response, true);
       // забираем эталонныый json и тоже преобразуем в массив
       $etalon_loadIngredientsReport_report = $I->getloadIngredientsReportJson();
       $etalon_loadIngredientsReport_report = json_decode($etalon_loadIngredientsReport_report, true);
       // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
       // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив амогут быть другмими)/* unset($etalon_loadReport_report['reportHeader']['leftAlignedText']);
       unset($etalon_loadIngredientsReport_report[0]['reportHeader']['rightAlignedText']);
       unset($etalon_loadIngredientsReport_report[0]['reportHeader']['toArray']['2']);
       unset($etalon_loadIngredientsReport_report[0]['runningTitle']['rightAlignedText']);
       unset($etalon_loadIngredientsReport_report[1]['reportHeader']['rightAlignedText']);
       unset($etalon_loadIngredientsReport_report[1]['reportHeader']['toArray']['2']);
       unset($etalon_loadIngredientsReport_report[1]['runningTitle']['rightAlignedText']);
       unset($loadIngredientsReport_report['0']['reportHeader']['rightAlignedText']);
       unset($loadIngredientsReport_report['0']['reportHeader']['toArray']['2']);
       unset($loadIngredientsReport_report['0']['runningTitle']['rightAlignedText']);
       unset($loadIngredientsReport_report['1']['reportHeader']['rightAlignedText']);
       unset($loadIngredientsReport_report['1']['reportHeader']['toArray']['2']);
       unset($loadIngredientsReport_report['1']['runningTitle']['rightAlignedText']);
     // сравниваем
     //  print_r(array_diff_key($etalon_loadReport_report, $loadReport_report));
       $I->assertEquals($etalon_loadIngredientsReport_report, $loadIngredientsReport_report);
    }

     public function dryMatterReport(FunctionalTester $I)
        // изменение ксв
         //todo сам отчёт битый (json при выгрузке не корректный 14.02.2019)
        {
            //  GET http://localhost:56541/api/dryMatterReports/json/2019-01-22/2019-01-22
            // копируем две бд подряд в папку с релизом
            $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
            $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
            $I->haveHttpHeader('Content-Type', 'application/json');
            $I->updateSQLDataBase($sql_db_name);
            $I->updateLiteDataBase($lite_db_name);
            //запускаем приложение
            $I->runApplication();
            // проверяем что оно поднялось
            $I->checkApplication();
            // шлем запрос на нужную дату
            $I->sendGET('http://localhost:56541/api/dryMatterReports/json/2019-01-10/2019-01-10');
            // проверяем код ответа
            $I->seeResponseCodeIs(200);
            // проверяем, что ответ пришел в нужном формате
            $I->seeResponseIsJson();
            // выгребаем ответ, пришедший на запрос
            $response = $I->grabResponse();
            // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
            $dryMatterReport_report = json_decode($response, true);
            // забираем эталонныый json и тоже преобразуем в массив
            $etalon_MatterReport_report = $I->getdryMatterReportJson();
            $etalon_MatterReport_report = json_decode($etalon_MatterReport_report, true);
            // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
            // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив амогут быть другмими)/* unset($etalon_loadReport_report['reportHeader']['leftAlignedText']);
            unset($etalon_MatterReport_report['reportHeader']['rightAlignedText']);
            unset($etalon_MatterReport_report['reportHeader']['centeredText']);
            unset($etalon_MatterReport_report['reportHeader']['toArray']['1']);
            unset($etalon_MatterReport_report['reportHeader']['toArray']['2']);
            unset($etalon_MatterReport_report['runningTitle']['centeredText']);
            unset($etalon_MatterReport_report['runningTitle']['rightAlignedText']);


            unset($dryMatterReport_report['reportHeader']['rightAlignedText']);
            unset($dryMatterReport_report['reportHeader']['centeredText']);
            unset($dryMatterReport_report['reportHeader']['toArray']['1']);
            unset($dryMatterReport_report['reportHeader']['toArray']['2']);
            unset($dryMatterReport_report['runningTitle']['centeredText']);
            unset($dryMatterReport_report['runningTitle']['rightAlignedText']);
            // сравниваем
            //  print_r(array_diff_key($etalon_loadReport_report, $loadReport_report));
            $I->assertEquals($etalon_MatterReport_report, $dryMatterReport_report);
        }
//
    public function remnantsWeightReport(FunctionalTester $I)
        // взвешивание остатков
    {
        //  GET http://localhost:56541/api/remnantsWeightReport/json/2019-01-25/2019-01-25
        // копируем две бд подряд в папку с релизом
        $sql_db_name = 'bd_reports/bd_old_11_02_2019/sqlite.db';
        $lite_db_name = 'bd_reports/bd_old_11_02_2019/lite.db';
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        //запускаем приложение
        $I->runApplication();
        // проверяем что оно поднялось
        $I->checkApplication();
        // шлем запрос на нужную дату
        $I->sendGET('http://localhost:56541/api/remnantsWeightReport/json/2019-01-10/2019-01-10');
        // проверяем код ответа
        $I->seeResponseCodeIs(200);
        // проверяем, что ответ пришел в нужном формате
        $I->seeResponseIsJson();
        // выгребаем ответ, пришедший на запрос
        $response = $I->grabResponse();
        // преобразуем json в ассоциатиынй массив (без параметра true работать не будет)
        $remnantsWeightReport_report = json_decode($response, true);
        // забираем эталонныый json и тоже преобразуем в массив
        $etalon_remnantsWeightReport_report = $I->getremnantsWeightReportJson();
        $etalon_remnantsWeightReport_report = json_decode($etalon_remnantsWeightReport_report, true);
        // убираем сегодняшнюю дату, с которой генерился отчет, потому что в эталоне она другая, для этого просто убираем из массива ключ
        // и значение ['reportHeader']['rightAlignedText'], ['toArray'][2], ['runningTitle']['rightAlignedText'] (в других отчетах ключ и структура массив амогут быть другмими)/* unset($etalon_loadReport_report['reportHeader']['leftAlignedText']);
        unset($etalon_remnantsWeightReport_report['reportHeader']['rightAlignedText']);
        unset($etalon_remnantsWeightReport_report['reportHeader']['toArray']['2']);
        unset($etalon_remnantsWeightReport_report['runningTitle']['rightAlignedText']);
        unset($remnantsWeightReport_report['reportHeader']['rightAlignedText']);
        unset($remnantsWeightReport_report['reportHeader']['toArray']['2']);
        unset($remnantsWeightReport_report['runningTitle']['rightAlignedText']);
        // сравниваем
        //  print_r(array_diff_key($etalon_loadReport_report, $loadReport_report));
        $I->assertEquals($etalon_remnantsWeightReport_report, $remnantsWeightReport_report);
    }
  
  
  
  
}
