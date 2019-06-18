<?php
namespace Page;

class FeedingPlans
{
    // include url of current page
    public static $URL = '/#/pages/feedingPlans';
    public static $addButton = '//i[@class=\'ion-ios-plus-outline\']';
    public static $ingredientNameField = '#name';
    public static $ingredientDigiStarCodeField = '#digiStarInterchangeCode';
    public  static $sortFeedingPlansByName ='//a[contains(text(),"Наименование")]';
    // /td[1] - корзина,  /td[2] - имя, /td[3] - описание   /tr[1]/td[1]  - строка
    public  static $rowInFeedingPlansTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/feedingplans[1]/div[1]/div[1]/ba-card[1]/div[1]/div[1]/master[1]/ng2-smart-table[1]/table[1]/tbody[1]';
    public  static $feedingPlansNameField = '#name';
    public  static $feedingPlansDescriptionField = '#description';
    public  static $feedingPlansRationSelect = '#ration';
    public  static $feedingPlansAddCircle = 'i.ion-android-add-circle';
    public  static $feedingPlansDeleteCircle = 'i.ion-android-remove-circle';
    public  static $feedingPlans100 = '.card-body form.ng-untouched.ng-valid.ng-dirty div.form-group.has-feedback:nth-child(4) nouislider.ng2-nouislider div.noUi-target.noUi-ltr.noUi-horizontal div.noUi-base div.noUi-origin:nth-child(1) div.noUi-handle.noUi-handle-lower > div.noUi-tooltip.noUi-tooltip-additional:nth-child(2)';
    public  static $feedingPlans50 = '.card-body form.ng-untouched.ng-valid.ng-dirty div.form-group.has-feedback:nth-child(4) nouislider.ng2-nouislider div.noUi-target.noUi-ltr.noUi-horizontal div.noUi-base div.noUi-origin:nth-child(2) div.noUi-handle.noUi-handle-upper > div.noUi-tooltip.noUi-tooltip-additional:nth-child(2)';
    public static $saveButton = '//button[@type=\'submit\']';


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
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }
    public function addFeedingPlan($feedingPlanName, $feedingPlanDescription)
    {
        $I = $this->tester;
        //$I->amOnPage(self::$URL);

        $I->click(self::$addButton);
        $I->fillField(self::$feedingPlansNameField, $feedingPlanName);
        $I->fillField(self::$feedingPlansDescriptionField, $feedingPlanDescription);
        $I->click(self::$feedingPlansRationSelect);
        $I->wait(1);
        $ration = $I->getExistingRationsList();
        $I->selectOption(self::$feedingPlansRationSelect, $ration[0]['Name']);
        // $I->click(self::$saveButton);
        return $this;
    }


    public static function route($param)
    {
        return static::$URL.$param;
    }


}
