<?php

require_once __DIR__ . "/../vendor/autoload.php";

define('ROOT', dirname(__DIR__));
Src\Core\App::bootstrap(dirname(__DIR__))->run();
