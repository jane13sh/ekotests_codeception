<?php
namespace Page;
use Helper\Common;
class Warehouse
{   // локаторы на странице Склад
    // локаторы карточки создания и редактирования
    public static $URL = '/#/pages/feedStorage';
    public static $addButton = '//i[@class=\'ion-ios-plus-outline\']';
    public static $updateButton = '/html/body/app/main/pages/div/div/feed-storage/feedstorage-unit-smart-table/ng2-smart-table/table/tbody/tr[1]/td[1]/ng2-st-tbody-edit-delete/a[1]';
    public static $saveButton = '(//*[contains(@class, \'ion-checkmark\')])';
    public static $noSaveButton = '/html/body/app/main/pages/div/div/feed-storage/feedstorage-unit-smart-table/ng2-smart-table/table/tbody/tr[1]/td[1]/ng2-st-tbody-create-cancel/a[2]';


    //Поля на странице
      //Поле вес (для редактирования и создания один и тот же)
    public static $warehouseWeightField = '(//*[contains(@type, \'number\')])';
      //Поле Наименование (действительно только для нового создания)
    public static $warehouseNameField = '(//*[contains(@class, \'form-control ng-untouched ng-pristine ng-invalid\')])[1]';
      //Поле Наименование (действительно только для редактирования)
    public static $editingWarehouseNameField = '/html/body/app/main/pages/div/div/feed-storage/feedstorage-unit-smart-table/ng2-smart-table/table/tbody/tr[1]/td[2]/ng2-smart-table-cell/table-cell-edit-mode/div/table-cell-default-editor/div/input-editor/div/input';
      //Поле Описание (для редактирования и создания один и тот же)
    public static $warehouseDescriptionField = '(//*[contains(@placeholder, \'Описание\')])[2]';

    //Выбор ингредиента из списка
      //выбор из списка при создании ячейки
    public static $warehouseIngredientField = '/html/body/app/main/pages/div/div/feed-storage/feedstorage-unit-smart-table/ng2-smart-table/table/thead/tr[3]/td[4]/ng2-smart-table-cell/table-cell-edit-mode/div/table-cell-default-editor/div/select-editor/select/option[1]';
      //выбор из списка при редактировании ячейки
    public static $updateWarehouseIngredientField = '/html/body/app/main/pages/div/div/feed-storage/feedstorage-unit-smart-table/ng2-smart-table/table/tbody/tr[1]/td[4]/ng2-smart-table-cell/table-cell-edit-mode/div/table-cell-default-editor/div/select-editor/select/option[1]';




    // Локаторы таблицы
    public  static $rowInNameWarehouseTable = '/html/body/app/main/pages/div/div/feed-storage/feedstorage-unit-smart-table/ng2-smart-table/table/tbody';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    //  метод add заполняет поля и нажимает кнопку, но не выполняет проверок по корректному созданию
    public function addWarehouse($warehouseName, $warehouseDescription, $warehouseWeight)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$addButton);
        $I->fillField(self::$warehouseNameField, $warehouseName);
        $I->fillField(self::$warehouseDescriptionField, $warehouseDescription);
        $I->fillField(self::$warehouseWeightField, $warehouseWeight);
        // $I->click(self::$saveButton);
        return $this;
    }

    public function updateWarehouse($WarehouseName, $warehouseDescription, $warehouseWeight)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$updateButton);
        $I->fillField(self::$editingWarehouseNameField, $WarehouseName);
        $I->fillField(self::$warehouseDescriptionField, $warehouseDescription);
        $I->fillField(self::$warehouseWeightField, $warehouseWeight);
        // $I->click(self::$saveButton);
        return $this;
    }
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
