<?php
namespace Page;

class Dashboard
{
    // главная страница
    public static $URL = '/pages/dashboard';
    public  static $t  = '//main[@class=\'ng2\']/pages/div[@class=\'al-main\']/div[@class=\'al-content\']/dashboard/div[@class=\'row\']/ba-card[@title=\'Остатки по дням\']/div[@class=\'animated card with-scroll medium-card traffic-panel\']/div[@class=\'card-body\']/traffic-chart/div[@class=\'channels-block\']/div[@class=\'channels-info\']/div/div[1]';
    // сенаж (часто меняющийся ксв - флажок в карточке ингредиента. ингредиент выведен на главнцую страницу)
    public static $dashboardSenajKSVField = '(//input[@type=\'number\'])[1]';
    //силос
    public static $dashboardSilosKSVField = '(//input[@type=\'number\'])[2]';
    // тренд аппетита. всего таких элементов должно быть как и секций 29  - добавляем [1]  до 29
  public  static  $dashboardAppetiteTrend = '(.//*[normalize-space(text()) and normalize-space(.)=\'Тренд аппетита\'])[1]/following::canvas';

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
