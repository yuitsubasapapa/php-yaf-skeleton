<?php

define("STARTTIME",microtime(1));
define("APP_PATH", dirname(__DIR__));

$app = new Yaf_Application(APP_PATH."/config/application.ini","production");
$app->bootstrap()->run();

echo PHP_EOL,number_format( microtime(1) - STARTTIME, 6);