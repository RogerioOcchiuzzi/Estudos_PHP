<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bookstore\Models\BookModel;
use Bookstore\Models\SaleModel;
use Bookstore\Core\Router;
use Bookstore\Core\Request;
use Bookstore\Core\Config;
use Bookstore\Core\Db;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Bookstore\Utils\DependencyInjector;

$config = new Config();
$dbConfig = $config->get('db');
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=bookstore',
    $dbConfig['user'],
    $dbConfig['password']
);
$loader = new Twig_Loader_Filesystem(__DIR__ . '/src/Views');
$view = new Twig_Environment($loader);
$log = new Logger('bookstore');
$logFile = $config->get('log');
$log->pushHandler(new StreamHandler($logFile, Logger::DEBUG));
$di = new DependencyInjector();
$di->set('PDO', $db);
$di->set('Utils\Config', $config);
$di->set('Twig_Environment', $view);
$di->set('Logger', $log);
$di->set('BookModel', new BookModel($di->get('PDO')));
$router = new Router($di);
$response = $router->route(new Request());

echo $response;

/* require_once __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/src/Views');
$twig = new Twig_Environment($loader);

$saleModel = new SaleModel(Db::getInstance());
$sale = $saleModel->get(1);
$params = ['sale' => $sale];
echo $twig->loadTemplate('sale.twig')->render($params); */


/* $saleModel = new SaleModel(Db::getInstance());
$sales = $saleModel->getByUser(1);
$params = ['sales' => $sales];
echo $twig->loadTemplate('sales.twig')->render($params); */


/* $bookModel = new BookModel(Db::getInstance());
$books = $bookModel->getAll(1, 3);
$params = ['books' => $books, 'currentPage' => 2];
echo $twig->loadTemplate('books.twig')->render($params); */


/* $bookModel = new BookModel(Db::getInstance());
$book = $bookModel->get(1);
$params = ['book' => $book];
echo $twig->loadTemplate('book.twig')->render($params); */