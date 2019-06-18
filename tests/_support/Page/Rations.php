<?php
namespace Page;
use Helper\Common;
class Rations
{
    public static $URL = '/#/pages/ingredients';
    // локаторы на странице рационы
    // локатор соответствующий всей строке в таблице Рационы списка рационов.
    //для добавления номера строки в тесте прибавить /tr[5],
    //где в квадратных скобках номер строчки/ Прибавление в конец /tr[8]/td[3]
    // будет означать восьмую строку и третий столбец (Сухой вес)

    public  static $rowInRationsTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/ng-component[1]/div[1]/div[1]/ba-card[1]/div[1]/div[1]/master[1]/ng2-smart-table[1]/table[1]/tbody[1]';
    // кнопка Добавить
    public static $addButton = '//i[@class=\'ion-ios-plus-outline\']';
    //поля
    public static $rationNameField = '#name';
    public static $rationDigiStarCodeField = '#digiStarInterchangeCode';
    public static $rationDensityField = '#density';
    public static $rationDescriptionField = '#description';

    // Таблица ингредиентов и порядок закладки ингредиентов
    //селектор выбора ингредиентов рациона
    public static $rationsIngredientSelect = 'div.ui-select-container input.form-control';
    // первый игредиент внутри селектора с подядковым номером /li[1]
    public static $rationsIngredientDropdownList = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/ng-component[1]/div[1]/div[1]/ba-card[2]/div[1]/div[1]/form[1]/div[6]/ng-select[1]/div[1]/ul[1]';
    // внутри таблицы закладки ингредиентов
    // к переменной с помощью конкатенации прибавить /tr[1] - номер строки  и опционально номер столбца /td[]
    // td[1] - порядковый номер td[2] - корзина td[3] - Ингредиент  td[4]  - СВ на голову td[5] - Вом
    public static $rowInRationsIngredientTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/ng-component[1]/div[1]/div[1]/ba-card[2]/div[1]/div[1]/form[1]/div[6]/table[1]/tbody[1]/';
    public static $saveButton = '//button[@type=\'submit\']';
    public  static $sortRationsByName ='//a[contains(text(),"Наименование")]';



    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function addRation($rationName, $rationDigiStarCode, $rationDensity, $rationDescription)
    {
        $I = $this->tester;
      //  $I->amOnPage(self::$URL);
        $I->wait(1);
        $I->click(self::$addButton);
        $I->fillField(self::$rationNameField, $rationName);
        $I->fillField(self::$rationDigiStarCodeField, $rationDigiStarCode);
        $I->fillField(self::$rationDensityField, $rationDensity);
        $I->fillField(self::$rationDescriptionField, $rationDescription);
        $I->click(self::$rationsIngredientSelect);
        $I->wait(1);
        $ingredients = $I->getExistingIngredientsList();
        $I->click(self::$rationsIngredientSelect);
        $I->wait(1);
        $I->click($ingredients[1]['Name']);
        $I->click(self::$rationsIngredientSelect);
        $I->wait(1);
        $I->click($ingredients[3]['Name']);
        $I->fillField(self::$rowInRationsIngredientTable . '/tr[1]/td[4]' . '/div[1]/input[1]' , '5');
        $I->fillField(self::$rowInRationsIngredientTable . '/tr[2]/td[4]' . '/div[1]/input[1]', '10');
        return $this;
    }



    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
