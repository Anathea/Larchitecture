<?php

namespace CRUD;

use \PDO;
use \PDOException;

/**
 * Description of DB
 *
 * @author anathea
 * @package CRUD
 * Connexion à la base de données
 */
class DB {

    private static $dbName = "Larchitecte";
    private static $host = "localhost";
    private static $port = "3306";
    private static $user = "admin";
    private static $password = "admin";
    public static $pdo = null;

    public static function init()
    {
        try {
            static::$pdo = new PDO('mysql:dbname=' . static::$dbName
                    . ';host='. static::$host
                    . ';port=' . static::$port, static::$user, static::$password);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
        static::$pdo->exec('SET NAMES UTF8;');
    }

}
