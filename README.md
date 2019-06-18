# feeding-php-autotests
### Описание файла TRAVIS 
  - npm install lite-server - команда устанавливает lite server
  - travis_wait 20 choco install jdk8    -   установка java для запуска selenium (только для UI тестов)
  - export PATH=$PATH:"/c/Program Files/Java/jdk1.8.0_191/bin"  - path для java (только для UI тестов)
  - export PATH=$PATH:"c/Users/travis/build/eko-point/feeding-php-autotests"  - path для selenium и chrome (только для UI тестов)
  - start java -Dwebdriver.chrome.driver="chromedriver.exe" -jar selenium-server-standalone-2.53.0.jar - старт селениум сервера (только для UI тестов)
  - travis_wait 15 choco install php --version 5.6.39 - установка php
  - export PATH=/c/tools/php56:$PATH - path для php
  - php copyphp.php - для доступности библиотеки curl для php  нужно внести изменения в файле php.ini. вместо этого просто заменяем файл
  - export PATH=/c/tools/php56/libeay32.dll:$PATH - это и ниже path для curl
  - export PATH=/c/tools/php56/ssleay32.dll:$PATH
  - export PATH=/c/tools/php56/libssh2.dll:$PATH
  - bash -c 'echo ${LICENSE}'>>lic.txt  -  инициализируем лицензию
  - php github.php - скачиваем последний develop, кладем в нужную папку, распаковываем и активируем лицензию
before_script:
  - choco install googlechrome - устанавливаем chrome (только для UI тестов)
script:
  - start lite-server -c bs-config.json  - запускаем lite server (только для UI тестов)
  - php codecept.phar run acceptance -d  - запуск тестов (подробнее о командах  https://codeception.com/docs/reference/Commands) 
  - php report.php - складывание на яндекс диск скриншотов с ошибками (всех файлов из директории _output) (только для UI тестов)
  
Описание фреймворка здесь https://eko-point.atlassian.net/wiki/spaces/SPC/pages/460816385/Codeception
При скачивании проекта с git необходимо будет только установить java, php и  прописать path. релиз устанавливать в папку release в той же директории, где находится файл codecept.phar
