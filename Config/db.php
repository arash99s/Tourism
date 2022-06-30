<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost:3306;dbname=Tourism", 'root', '');
        }
        if(!self::$bdd){
            echo "can not connect to database\n";
        }
        return self::$bdd;
    }
}
?>