<?php
namespace Page;

class CattleHouseSection
{

    // локаторы на странице Ингредиенты
    // локаторы карточки создания ингредиента
    public static $URL = '/#/pages/cattleHouseSections';
    public static $addButton = 'span.ion-ios-plus-outline';
    public static $sectionNameField = '#name';
    public static $sectionDigiStarCodeField = '#digiStarInterchangeCode';
    public static $sectionFeedingPlanSelect = ' //select[@id=\'feedingPlan\']';
    public static $sectionMixerSelect = '//select[@id=\'mixer\']';
    public static $sectionAppetiteField = '(.//*[normalize-space(text()) and normalize-space(.)=\'Аппетит (%)\'])[1]/following::input[1]';
    public static $sectionPhysicalGroupSelect = '//div[@class=\'ui-select-container ui-select-multiple dropdown form-control open\']//input[@type=\'text\']';
    public static $sectionDescriptionField = '//textarea[@id=\'description\']';
    public static $saveButton = '//button[@type=\'submit\']';
    // табличка со списком групп и поголовий на карточке секции где tr - номер строки, а к переменной надо добавить /tr[1]//td[3]//div[1]//input[1]
    public static $sectionCount = '//td[@class=\'physiologicalGroups-table-heads\']//input[@type=\'number\']';
    // название физ группы
    public static $sectionnamePhysGroup = '';
    //удаление физ группы из секции tr 1 =  1 в списке
    public static $sectionDeletePhysGroup = '//div[@class=\'form-group has-feedback physiologicalGroups-group\']//tbody//tr[1]//td[1]';




    // табличка со списком секций. в списке 29 секций tr[1]/td[3] - первый элемент в списке. далее изменяем tr для прохождения по наименованиям   для веса  td[4]
    //  todo но в  браузерной версии вес пока некорректен - не округляется. заведена задача
    public  static $rowSectionsTable = '//ba-card[1]/div[1]/div[1]/p-datatable[1]/div[1]/div[1]/table[1]/tbody[1]/';

    // кнопка удаления в таблице с секциями. в данном случае удаление первого в списке 9секция 31
    public static $deleteSectionButton = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/ng-component[1]/div[1]/div[1]/ba-card[1]/div[1]/div[1]/p-datatable[1]/div[1]/div[1]/table[1]/tbody[1]/tr[1]/td[1]';





















    public static function route($param)
    {
        return static::$URL.$param;
    }


}
