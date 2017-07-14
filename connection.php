<?php

class Db {

    private static $instance = NULL;

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    public static function getInstance() {
        $config = include('config.php');
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO($config['db_dsn'], $config['db_username'], $config['db_password'], $pdo_options);
        }
        return self::$instance;
    }

}
