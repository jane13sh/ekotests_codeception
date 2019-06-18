<?php
namespace Page;



class Tasks
{
    // include url of current page
    public static $URL = '/pages/tasks';
    public static $tasksUpdateButton = '//button[contains(text(),\'Переформировать задания\')]';
    public static $tasksRunButton = '//span[contains(text(),\'Запустить\')]';
    public static $tasksEndButton = '//span[contains(text(),\'Завершить\')]';
    public static $tasksCancelButton = '//span[contains(text(),\'Отменить\')]';
    // столбец с чекбоксами где tr номер строки а td столбец с чекбоксами. всего сторок  16,  в конце добавить к переменной tr[1]/td[1]
    public static $tasksCheckbox = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/';
    // столбец с именами tr[1]/td[3]  менять tr - это строка
    public static $tasksName = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/';
    // столбец с номером загрузки миксера
    public static $tasksMixerLoad = '';
    //столбец с номером кормления
    public static $tasksFeedNumber = '';
    // столбец со статусом задания
    public static $tasksState = '';
    // столбец с рационом
    public static $tasksRation = '';
    // столбец с плановым весом
    public static $tasksPlanWeighr = '';
    // столбец с фактическим весом
    public static $tasksActualWeight = '';

    // для построковой проверки таблицы tr[1]/td[3]   3 - имя, 4 - загрузка миксера, 5 - номер кормления, 6 - статус , 7 - рацион, 8 - план вес, 9 - факт вес.

    public static $tasksLineInTable = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/';

    // сообщения об остатке на складе
    public static $tasksAlarm1 = 'Ингредиент Комбикорм № 2 заканчивается, прогнозируемый остаток 2 дня';
    public static $tasksAlarm2 = 'Ингредиент Сено заканчивается, прогнозируемый остаток 4 дня';
    public static $tasksAlarm3 = 'Ингредиент Комбикорм № 3 заканчивается, прогнозируемый остаток 5 дней';
    public static $tasksAlarm4 = 'Ингредиент Комбикорм № 12 заканчивается, прогнозируемый остаток 5 дней';
    public static $tasksAlarmId = '//div[@ng-reflect-ng-switch=\'true\']//span';

    //эталонные данные таблицы
    public static $tasks_table = "3011НоваяД-19740СекцияПоголовьеАппетит,%План.вес,кг5447849739Копытчик1673523110742120241117922832111293271222113882589ИнгредиентЯчейкаПлан.вес,кг99740СоломапшеничнаяСоломапшеничная152СеноСено217Комбикорм№20Комбикорм№201530Комбикорм№11Комбикорм№11841СояСоя374РапсРапс166СенажСенаж171566СилосСилос4424Вода4703021НоваяД-19695СекцияПоголовьеАппетит,%План.вес,кг435891969543152883483441519738141035871586122078812ИнгредиентЯчейкаПлан.вес,кг99695СоломапшеничнаяСоломапшеничная152СеноСено216Комбикорм№20Комбикорм№201523Комбикорм№11Комбикорм№11837СояСоя372РапсРапс165СенажСенаж171559СилосСилос4404Вода4673031НоваяТ6-123910СекцияПоголовьеАппетит,%План.вес,кг235965391161-63304623171645580740ИнгредиентЯчейкаПлан.вес,кг63910СеноСено270Комбикорм№20Комбикорм№20568РапсРапс232ПремикстелкиПремикстелки37СенажСенаж171104СилосСилос16993041НоваяД-16846СекцияПоголовьеАппетит,%План.вес,кг228991684541145813058421441013787ИнгредиентЯчейкаПлан.вес,кг96846СоломапшеничнаяСоломапшеничная107СеноСено153Комбикорм№20Комбикорм№201075Комбикорм№11Комбикорм№11591СояСоя263РапсРапс117СенажСенаж171101СилосСилос3109Вода3303051НоваяНетели5628СекцияПоголовьеАппетит,%План.вес,кг22268356286511180267971115852949ИнгредиентЯчейкаПлан.вес,кг65628СеноСено651Комбикорм№20Комбикорм№20424РапсРапс104ПремикстелкиПремикстелки29СенажСенаж171586СилосСилос28343061НоваяД-26717СекцияПоголовьеАппетит,%План.вес,кг115482671753154826717ИнгредиентЯчейкаПлан.вес,кг96717СоломапшеничнаяСоломапшеничная73СеноСено220Комбикорм№12Комбикорм№12568Комбикорм№20Комбикорм№20861СояСоя224РапсРапс140СенажСенаж171137СилосСилос3303Вода1913071НоваяСух-17058СекцияПоголовьеАппетит,%План.вес,кг2219100705873110103365172109973407ИнгредиентЯчейкаПлан.вес,кг67058СоломапшеничнаяСоломапшеничная382СеноСено509Комбикорм№20Комбикорм№20199ПремикскоровыПремикскоровы33СенажСенаж172355СилосСилос35803081НоваяД-17250СекцияПоголовьеАппетит,%План.вес,кг114596725054145967250ИнгредиентЯчейкаПлан.вес,кг97250СоломапшеничнаяСоломапшеничная113СеноСено162Комбикорм№20Комбикорм№201139Комбикорм№11Комбикорм№11626СояСоя278РапсРапс124СенажСенаж171166СилосСилос3293Вода3493091НоваяД-34643СекцияПоголовьеАппетит,%План.вес,кг22267846425110574203952121822603ИнгредиентЯчейкаПлан.вес,кг64643СеноСено206Комбикорм№12Комбикорм№12348Комбикорм№20Комбикорм№20201РапсРапс98СенажСенаж171493СилосСилос229730101НоваяСух-27432СекцияПоголовьеАппетит,%План.вес,кг426093743313459012431659851539118995259574671002056ИнгредиентЯчейкаПлан.вес,кг77432СоломапшеничнаяСоломапшеничная422Комбикорм№20Комбикорм№20454СояСоя269РапсРапс161Комбикорм№2Комбикорм№2369СенажСенаж171211СилосСилос454630112НоваяД-19708СекцияПоголовьеАппетит,%План.вес,кг444684970423110742120241117922832111293271222113882589ИнгредиентЯчейкаПлан.вес,кг99708СоломапшеничнаяСоломапшеничная152СеноСено217Комбикорм№20Комбикорм№201525Комбикорм№11Комбикорм№11838СояСоя373РапсРапс166СенажСенаж171561СилосСилос4408Вода46830122НоваяД-110356СекцияПоголовьеАппетит,%План.вес,кг34488910355431528834834415197381441145813058ИнгредиентЯчейкаПлан.вес,кг910356СоломапшеничнаяСоломапшеничная162СеноСено231Комбикорм№20Комбикорм№201627Комбикорм№11Комбикорм№11894СояСоя398РапсРапс177СенажСенаж171665СилосСилос4703Вода49930132НоваяД-13788СекцияПоголовьеАппетит,%План.вес,кг11441013787421441013787ИнгредиентЯчейкаПлан.вес,кг93788СоломапшеничнаяСоломапшеничная59СеноСено85Комбикорм№20Комбикорм№20595Комбикорм№11Комбикорм№11327СояСоя145РапсРапс65СенажСенаж17609СилосСилос1720Вода18330142НоваяД-34643СекцияПоголовьеАппетит,%План.вес,кг22267846425110574203952121822603ИнгредиентЯчейкаПлан.вес,кг64643СеноСено206Комбикорм№12Комбикорм№12348Комбикорм№20Комбикорм№20201РапсРапс98СенажСенаж171493СилосСилос229715151НоваяД-04385СекцияПоголовьеАппетит,%План.вес,кг31317643873162782120326278212015748147ИнгредиентЯчейкаПлан.вес,кг84385СоломапшеничнаяСоломапшеничная116Комбикорм№20Комбикорм№20284Комбикорм№11Комбикорм№11337СояСоя222РапсРапс61ГлицеринГлицерин45СенажСенаж17626СилосСилос269415161НоваяТ2-63877СекцияПоголовьеАппетит,%План.вес,кг13741443878Навес3741443878ИнгредиентЯчейкаПлан.вес,кг53877СеноСено219Комбикорм№3Комбикорм№31285Комбикорм№20Комбикорм№20245СенажСенаж17471СилосСилос1657";
    public static $tasks_summary = '105676 0';

    public static $i_task1 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[8]/following::span[3]';
    public static $task2 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[3]';
    public static $i_task2 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[23]/following::span[3]';

    public static $task3 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[5]';
    public static $i_task3 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[36]/following::span[3]';

    public static $task4 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[7]';
    public static $i_task4 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[46]/following::span[3]';

    public static $task5 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[9]';
    public static $i_task5 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[59]/following::span[3]';

    public static $task6 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[11]';
    public static $i_task6 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[68]/following::span[3]';

    public static $task7 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[13]';
    public static $i_task7 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[81]/following::span[3]';

    public static $task8 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[15]';
    public static $i_task8 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[90]/following::span[3]';

    public static $task9 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[17]';
    public static $i_task9 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[103]/following::span[3]';

    public static $task10 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[19]';
    public static $i_task10 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[115]/following::span[3]';

    public static $task11 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[21]';
    public static $i_task11 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[128]/following::span[3]';

    public static $task12 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[23]';
    public static $i_task12 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[142]/following::span[3]';

    public static $task13 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[25]';
    public static $i_task13 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[154]/following::span[3]';

    public static $task14 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[27]';
    public static $i_task14 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[167]/following::span[3]';

    public static $task15 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[29]';
    public static $i_task15 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[178]/following::span[3]';

    public static $task16 = '/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]/tr[31]';
    public static $i_task16 = '(.//*[normalize-space(text()) and normalize-space(.)=\'План. вес, кг\'])[189]/following::span[3]';












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
