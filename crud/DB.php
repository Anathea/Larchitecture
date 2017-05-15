<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author anathea
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
