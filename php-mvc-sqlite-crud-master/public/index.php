<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('DB_FILE', ROOT . 'db' . DIRECTORY_SEPARATOR . 'banco.sqlite');
define('CONFIG_FILE', APP . 'config' . DIRECTORY_SEPARATOR . 'config.php');

// Debug, deixe como false.
define('OFFLINE', true);

require ROOT . 'vendor/autoload.php';
require APP . 'config/urls.php';

use Crud\Core\App;
$app = new App();
