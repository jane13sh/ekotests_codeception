<?php
/**
 * Created by PhpStorm.
 * User: esholohova
 * Date: 01.11.2018
 * Time: 10:55
 */

namespace Helper;
use Codeception\Codecept;
use PDO;

class Common extends \Codeception\Module
{

    public  function updateSQLDataBase($sql_db_name) {

        $file = 'tests/_data/' . $sql_db_name;
        $newfile = 'release/feeding-farm-datastore/sqlite.db';
        if (!copy($file, $newfile)) {
            echo "не удалось скопировать $file...\n";            return false;
        }
       return true;
    }

    public  function updateLiteDataBase($lite_db_name) {

        $file = 'tests/_data/' . $lite_db_name;
        $newfile = 'release/feeding-farm-datastore/lite.db';
        if (!copy($file, $newfile)) {
            echo "не удалось скопировать $file...\n";            return false;
        }
        sleep(3);
        return true;
    }





    public  function runApplication()
    {
        pclose(popen("start /b release/feeding.exe", 'r'));

    }


    public  function  checkApplication()


    {
        $result = null;
        while ($result != '{"name":""}') {
            $url = 'http://127.0.0.1:3021/api/breeding-complex';
            $ch = curl_init();
            $headers[] = "Content-Type: application/json";
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //$info = curl_getinfo($ch);
            $result = curl_exec($ch);
            $error = curl_error($ch);
           // var_dump($error);
           //  var_dump($result);
        }



    }

    public  function stopApplication() {
    
	   // exec("cmd /c taskkill /F /IM feeding-diary-comp.exe /T");
	    //exec("cmd /c taskkill /F /IM feeding-digi-star.exe /T");
        //exec("cmd /c taskkill /F /IM Ekopoint.Feeding.ReportControlling.exe /T");
	    //exec("cmd /c taskkill /F /IM Ekopoint.Feeding.Tasks.exe /T");
	    //exec("cmd /c taskkill /F /IM feeding-farm-server.exe /T");
	     exec("cmd /c taskkill /F /IM feeding.exe /T");
        //exec("cmd /c taskkill /F /IM feeding-client.exe /T");
        sleep(5);

    }

    public  function getExistingIngredientsList() {

            // список ингредиентов
            // todo соединение с бд вынести в приличное место
            $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
            $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $ingredients_list = array();

            $sth = $myPDO->query("SELECT * FROM Ingredients WHERE DeletedAt IS NULL");
            while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
                $ingredients_list[] = $row; // appends each row to the array

            }
            return $ingredients_list;
        }

    public  function getExistingPhysicalGroupsList() {

        // список физ. груп.
        // todo соединение с бд вынести в приличное место
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $physicalGroup_list = array();

        $sth = $myPDO->query("SELECT * FROM PhysiologicalGroups WHERE DeletedAt IS NULL");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $physicalGroup_list[] = $row; // appends each row to the array

        }
        return $physicalGroup_list;
    }




    public  function getExistingRationsList() {

        // список рационов
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $myPDO->query("SELECT * FROM Rations");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $rations_list[] = $row; // appends each row to the array

        }
        return $rations_list;
    }

    public  function getExistingRationIngredientsList($rationName) {

        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        // запрос осуществляется по имени
        // Проверка
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $myPDO->query("SELECT RationIngredients.OrdinalNumber, Rations.Name As RationName, Ingredients.Name As IName, RationIngredients.MixingTime, RationIngredients.DryWeight FROM Rations 
        join RationIngredients On Rations.Id = RationIngredients.RationId 
        join Ingredients On RationIngredients.IngredientId = Ingredients.Id
        Where Rations.Name = '" . $rationName . "'
        ORDER BY RationIngredients.OrdinalNumber ASC");
        $ration_ingredients_list = array();
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $ration_ingredients_list[] = $row; // appends each row to the array

        }

        return $ration_ingredients_list;
    }


    public  function getExistingFeedingPlansList() {

        // список расписаний
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        $sth = $myPDO->query("SELECT * FROM 'FeedingPlans'");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $feeding_plans_list[] = $row; // appends each row to the array

        }
        return $feeding_plans_list;
    }

    public  function getExistingPhysiologicalGroupsList() {

        // список физиологических групп
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        $sth = $myPDO->query("SELECT * FROM 'PhysiologicalGroups' ORDER BY NAME DESC");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $physiological_groups_list[] = $row; // appends each row to the array

        }
        return $physiological_groups_list;

    }


    public  function getPensList() {

        // список отделений коровника вывод по порядковому номеру
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // выборка таблички со списком ингредиентов, которая расположена внизу карточки рациона. вывод только ее полей
        $sth = $myPDO->query("SELECT * FROM 'Pens' ORDER BY OrdinalNumber ASC");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $pens_list[] = $row; // appends each row to the array

        }
        return $pens_list;

    }


    public  function getPenSettingsList() {

        // список данных, видимых на странице Коровник
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //сортировка как на странице, по номеру сексии, а не айди
        //выводит: имя PensName (имя секции) FeedingPlanName (название расписания)
        //PhysiologicalGroupsName (название группы) MixerName (название миксера) HeadCount (поголовье) Apetit
        // todo добавить аппетит
        $sth = $myPDO->query("SELECT  Pens.Name AS PensName, PhysiologicalGroups.Name AS PhysiologicalGroupsName, Mixers.Name AS MixerName, PenPhysiologicalGroups.HeadCount, FeedingPlans.Name AS FeedingPlanName, Pens.Appetite AS Appetite FROM Pens 
        join PhysiologicalGroups On Pens.Id = PenPhysiologicalGroups.PenId
		join PenPhysiologicalGroups ON PenPhysiologicalGroups.PhysiologicalGroupId = PhysiologicalGroups.Id
		join Mixers ON Mixers.Id = Pens.MixerId
		join FeedingPlans ON FeedingPlans.Id = Pens.FeedingPlanId
        ORDER BY Pens.OrdinalNumber ASC");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $pen_settings_list[] = $row; // appends each row to the array

        }
        return $pen_settings_list;

    }
    public  function getExistingWarehousesIngredientsListAsc() {

        // список данных со склада с сопоставлением ингредиентов, сортировка по Asc
        $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // выборка таблички со списком складов, весом, лежащимим ингредиентом, описанием
        $sth = $myPDO->query("SELECT IngredientStorageUnits.Name As IngredientStorageUnitsName, IngredientStorageUnits.Description As IngredientStorageUnitsDescription, IngredientStorageUnits.Weight As IngredientStorageUnitsWeight, IngredientStorageUnits.IngredientId, Ingredients.Name As IngredientsName, Ingredients.Name FROM IngredientStorageUnits
        join Ingredients On IngredientStorageUnits.IngredientId = Ingredients.Id
        ORDER BY IngredientStorageUnits.Id Asc ");
        while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
            $Warehouses_list[] = $row; // appends each row to the array
        }
        return $Warehouses_list;
    }

    public  function getExistingWarehousesIngredientsListDesc() {

            // список данных со склада с сопоставлением ингредиентов, сортировка по Desc
            $myPDO = new PDO('sqlite:release/feeding-farm-datastore/sqlite.db');
            $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // выборка таблички со списком складов, весом, лежащимим ингредиентом, описанием
            $sth = $myPDO->query("SELECT IngredientStorageUnits.Name As IngredientStorageUnitsName, IngredientStorageUnits.Description As IngredientStorageUnitsDescription, IngredientStorageUnits.Weight As IngredientStorageUnitsWeight, IngredientStorageUnits.IngredientId, Ingredients.Name As IngredientsName, Ingredients.Name FROM IngredientStorageUnits
        join Ingredients On IngredientStorageUnits.IngredientId = Ingredients.Id
        ORDER BY IngredientStorageUnits.Id Desc ");
            while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
                $Warehouses_list[] = $row; // appends each row to the array
            }
            return $Warehouses_list;
    }






}
