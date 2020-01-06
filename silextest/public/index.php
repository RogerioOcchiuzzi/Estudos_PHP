<?php

use Silex\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$env = getenv('APP_ENV') ?: 'prod';

$app->register(
    new Igorw\Silex\ConfigServiceProvider(
    __DIR__ . "/../config/$env.json"));

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    ['twig.path' => __DIR__ . '/../views']);

$app->register(
    new Silex\Provider\MonologServiceProvider(),
    ['monolog.logfile' => __DIR__ . '/../app.log']);

$app->register(new Silex\Provider\DoctrineServiceProvider(), [
    'dbs.options' => [
    [
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'cookbook',
    'user' => 'webmaster',
    'password' => 'webmaster']]
]);

$app->get('/','CookBook\\Controllers\\RecipesController::getAll');

$app->post('/recipes',
    'CookBook\\Controllers\\RecipesController::create');

$app->get('/recipes',
    'CookBook\\Controllers\\RecipesController::getNewForm');

$app->run();