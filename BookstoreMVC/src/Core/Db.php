<?php
/* classe sem uso
namespace Bookstore\Core;

use PDO;

class Db {

    private static $instance;

    private static function connect(): PDO {

        $dbCredencialJson = file_get_contents(__DIR__ ."/credencial_database.json");
        $dbCredencialArray = json_decode($dbCredencialJson, true);

        return new PDO(
            'mysql:host=127.0.0.1;dbname=bookstore',
            $dbCredencialArray['db']['user'],
            $dbCredencialArray['db']['password']);

    }

    public static function getInstance(){

        if (self::$instance == null) {

            self::$instance = self::connect();

        }

        return self::$instance;
    }

} */