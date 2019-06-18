<?php
namespace Page;

class Mixers
{
    // миксеры
    public static $URL = '/pages/mixer';
    public static $mixersAddButton = 'i.ion-ios-plus-outline';
    public static $mixersNameField = '//input[@placeholder=\'Наименование\']';
    public static $mixersDescriptionField = '//input[@placeholder=\'Описание\']';
    public static $mixersVolumeField = '//input[@placeholder=\'Объем (м3)\']';
    public static $mixersSaveButton = 'i.ion-checkmark';
    public static $mixers1UpdateButton = '(.//*[normalize-space(text()) and normalize-space(.)=\'Действия\'])[1]/following::i[2]';
    // список миксеров в таблице
    public static $mixers1NameInTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[1]/td[2]';
    public static $mixers2NameTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[2]/td[2]';
    public static $mixers1VolumeInTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[2]/td[4]';
    public static $mixers2VolumeInTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/mixer[1]/mixer-smart-table[1]/ng2-smart-table[1]/table[1]/tbody[1]/tr[2]/td[4]';
    public static $mixersDeleteButton = '/pages/mixer';



    public static function route($param)
    {
        return static::$URL.$param;
    }


}
