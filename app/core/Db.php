<?php

class Db
{
    private static $_dbh=null;

    public static function getConnect()
    {
        $paramsPath = ROOT . '/app/config/dbConnect.php';

        $params = include($paramsPath);

        $dns = "mysql:host={$params['host']};dbname={$params['dbname']}";

        if(self::$_dbh===null){

            try {

                $_dbh = new PDO($dns, $params['user'], $params['password']);

            } catch (PDOException $e) {

                echo 'Подключение не удалось: ' . $e->getMessage();

            }
        }

        return $_dbh;
    }

    private function __construct(){}

    private function __clone(){}

    private function __wakeup(){}

}



