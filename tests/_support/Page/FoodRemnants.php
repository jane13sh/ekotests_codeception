<?php
namespace Page;

class FoodRemnants
{
    // Остатки
    public static $URL = '/pages/foodRemnants';

    // дата
    public static $foodRemnantsDateField = '//input[@class=\'selection ng-untouched ng-pristine ng-valid\']';
    public static $foodRemnantsAddButton = 'span.ion-ios-plus-outline';
    public static $foodRemnantsDateFromField = '//input[@placeholder=\'Дата начала накопления\']';
    public static $foodRemnantsDateEndField = '//input[@placeholder=\'Дата начала накопления\']';
    public static $foodRemnantsSaveButton = '//input[@placeholder=\'Дата и время оценки остатков\']';
    public  static $foodRemnantsSectionSelect = '//select[@id=\'section\']';
    public  static $foodRemnantsWeigrField = '//input[@id=\'weight\']';




    public static function route($param)
    {
        return static::$URL.$param;
    }


}
