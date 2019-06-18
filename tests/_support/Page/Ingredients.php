<?php
namespace Page;

class Ingredients
{   // локаторы на странице Ингредиенты
    // локаторы карточки создания ингредиента
    public static $URL = '/#/pages/ingredients';
    public static $addButton = '//i[@class=\'ion-ios-plus-outline\']';
    public static $ingredientNameField = '#name';
    public static $ingredientDigiStarCodeField = '#digiStarInterchangeCode';
    public static $ingredientDryMatterField = '#dryMatter';
    public static $ingredientPriceField = '#price';
    public static $ingredientTypeField = '#';
    public static $ingredientDescriptionField = '#description';
    public static $saveButton = '//button[@type=\'submit\']';
    public static $dynamicDryMatterCheckbox = 'label.custom-checkbox.dynamic-dry-matter-cb > span';
    // локаторы таблицы
    public  static $sortIngredientsByName ='//a[contains(text(),"Наименование")]';
    // локатор соответствующий всей строке в таблице Ингредиенты.
    //для добавления номера строки в тесте прибавить /tr[5],
    //где в квадратных скобках номер строчки/ Прибавление в конец /tr[8]/td[3]
    // будет означать восьмую строку и третий столбец (КСВ)

    public  static $rowInIngredientsTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/ingredients[1]/div[1]/div[1]/ba-card[1]/div[1]/div[1]/master[1]/ng2-smart-table[1]/table[1]/tbody[1]';




    public static $submitButton = '#mainForm input[type=submit]';

    /**
     * @var AcceptanceTester
     */
    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    //  метод add заполняет поля и нажимает кнопку, но не выполняет проверок по корректному созданию
    public function addIngredient($ingredientName, $ingredientDigiStarCode, $ingredientDryMatter, $ingredientPrice, $ingredientDescription)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$addButton);
        $I->fillField(self::$ingredientNameField, $ingredientName);
        $I->fillField(self::$ingredientDigiStarCodeField, $ingredientDigiStarCode);
        $I->fillField(self::$ingredientDryMatterField, $ingredientDryMatter);
        $I->fillField(self::$ingredientPriceField, $ingredientPrice);
        $I->fillField(self::$ingredientDescriptionField, $ingredientDescription);
       // $I->click(self::$saveButton);
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
