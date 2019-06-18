<?php
use Page\Tasks as tasksPage;
use Helper\Common;
class TasksCest
{
    public function _before(AcceptanceTester $I)
    {
        $sql_db_name = 'sqlite.db';
        $lite_db_name = 'lite.db';
        $I->updateSQLDataBase($sql_db_name);
        $I->updateLiteDataBase($lite_db_name);
        $I->runApplication();
        $I->checkApplication();

    }
    public function _after(AcceptanceTester $I)
    {
        $I->stopApplication();
    }

    public function createTasksList(AcceptanceTester $I, \Page\Tasks $tasksPage)
    {
        $I->wantTo('create tasks list a');
        $I->reloadPage();
        $I->amOnPage('/#/pages/tasks');
        // нажимаем пеерформировать задания
        $I->waitForText("Переформировать задания", 20);
        $I->click('//button[contains(text(),\'Переформировать задания\')]');
        $I->dontSee('Ошибка');
        $I->dontSee('Bad Request');
        $I->dontSee('Error');
        $I->wait(7);
        // смотрим алармы по остаткам
        $I->waitForText('Задания успешно сформированы');
        $I->waitForText($tasksPage::$tasksAlarm1);
        $I->waitForText($tasksPage::$tasksAlarm2);
        $I->waitForText($tasksPage::$tasksAlarm3);
        $I->waitForText($tasksPage::$tasksAlarm4);
        // ждем появления одной из секций поскольку заколовок загружается раньше
        $I->waitForText('Нетели');
        $I->wantTo('assert tasks data');
        // проверяем данные в таблице на соответствие с эталоном (переменная $tasks_etalon содержится в PageObjectTasks
        // вместо прохождения циклом по всей таблице используется  метод grab, который вытаскивает все данные из данного локатора. в данном случае локатор - вся таблица. на выходе получается строка
        // для удобства хранения в строке убираются пробелы и переводы строк.
        //раскрываем все списки
        $I->click('//span/a/span');
        // ждем нужный текст
        // раскрываем ингредиенты по очереди. до них приходится скроллить, иначе локатора не видно, перед этим ждем исчезновения алармов


        $I->waitForElementNotVisible($tasksPage::$tasksAlarmId);
        // todo сделать из этого красивый foreach

        $I->click($tasksPage::$i_task1);

        $I->scrollTo(['xpath' => $tasksPage::$task2]);
        $I->click($tasksPage::$i_task2);

        $I->scrollTo(['xpath' => $tasksPage::$task3]);
        $I->click($tasksPage::$i_task3);

        $I->scrollTo(['xpath' => $tasksPage::$task4]);
        $I->click($tasksPage::$i_task4);

        $I->scrollTo(['xpath' => $tasksPage::$task5]);
        $I->click($tasksPage::$i_task5);

        $I->scrollTo(['xpath' => $tasksPage::$task6]);
        $I->click($tasksPage::$i_task6);

        $I->scrollTo(['xpath' => $tasksPage::$task7]);
        $I->click($tasksPage::$i_task7);

        $I->scrollTo(['xpath' => $tasksPage::$task8]);
        $I->click($tasksPage::$i_task8);

        $I->scrollTo(['xpath' => $tasksPage::$task9]);
        $I->click($tasksPage::$i_task9);

        $I->scrollTo(['xpath' => $tasksPage::$task10]);
        $I->click($tasksPage::$i_task10);

        $I->scrollTo(['xpath' => $tasksPage::$task11]);
        $I->click($tasksPage::$i_task11);

        $I->scrollTo(['xpath' => $tasksPage::$task12]);
        $I->click($tasksPage::$i_task12);

        $I->scrollTo(['xpath' => $tasksPage::$task13]);
        $I->click($tasksPage::$i_task13);

        $I->scrollTo(['xpath' => $tasksPage::$task14]);
        $I->click($tasksPage::$i_task14);

        $I->scrollTo(['xpath' => $tasksPage::$task15]);
        $I->click($tasksPage::$i_task15);

        $I->scrollTo(['xpath' => $tasksPage::$task16]);
        $I->click($tasksPage::$i_task16);

        //вытаскиваем все что есть из стаблицы
        $assert = $I->grabTextFrom('/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tbody[1]');
        //это последняя строка всей таблицы заданий
        $assert1 = $I->grabTextFrom('/html[1]/body[1]/app[1]/main[1]/pages[1]/div[1]/div[1]/tasks[1]/div[1]/div[2]/div[1]/p-datatable[1]/div[1]/div[2]/table[1]/tfoot[1]/tr[1]');
        // делаем из большой таблицы строку: убираем пробелы и переносы строк. эталонное значение лежит в переменной $tasks_table (ля Итого:в $tasks_summary) в page object Tasks
        $assert = str_replace(" ", "", $assert);
        $assert = str_replace("\n", "", $assert);
        $I->assertEquals($tasksPage::$tasks_table, $assert);
        $I->assertEquals($tasksPage::$tasks_summary, $assert1);





    }
}
