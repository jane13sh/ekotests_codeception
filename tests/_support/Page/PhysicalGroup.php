<?php
namespace Page;
class PhysicalGroup
{
    // include url of current page
    public static $URL = '/#/pages/physiologicalGroups';
    public static $addButton = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/physiologicalgroups[1]/div[1]/div[1]/ba-card[1]/div[1]/div[1]/master[1]/ng2-smart-table[1]/table[1]/thead[1]/tr[2]/th[1]/a[1]/i[1]';
    public static $physicalGroupNameField = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/physiologicalgroups[1]/div[1]/div[1]/ba-card[2]/div[1]/div[1]/form[1]/div[1]/div[1]/div[1]/input[1]';
    public static $physicalGroupDescriptionField = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/physiologicalgroups[1]/div[1]/div[1]/ba-card[2]/div[1]/div[1]/form[1]/div[2]/textarea[1]';
    public static $saveButton  = '/html/body/app/main/pages/div/div/physiologicalgroups/div/div/ba-card[2]/div/div/form/button[1]';
    public static $CancelButton = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/physiologicalgroups[1]/div[1]/div[1]/ba-card[2]/div[1]/div[1]/form[1]/button[2]';
    public static $updatePhysicalGroupClick = '/html/body/app/main/pages/div/div/physiologicalgroups/div/div/ba-card[1]/div/div/master/ng2-smart-table/table/tbody/tr[1]/td[2]/ng2-smart-table-cell/table-cell-view-mode/div/div';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function addPhysicalGroup($physicalGroupName, $physicalGroupDescription)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$addButton);
        $I->fillField(self::$physicalGroupNameField, $physicalGroupName);
        $I->fillField(self::$physicalGroupDescriptionField, $physicalGroupDescription);

        return $this;
    }
    //Изменяем физ группу
    public function updatePhysicalGroup($updatePhysicalGroupName, $updatePhysicalGroupDescription)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$updatePhysicalGroupClick);
        $I->fillField(self::$physicalGroupNameField, $updatePhysicalGroupName);
        $I->fillField(self::$physicalGroupDescriptionField, $updatePhysicalGroupDescription);

        return $this;
    }





    /**
     * Declare UI map for this page here. CSS or XPath allowed.     * public static $usernameField = '#username';
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
