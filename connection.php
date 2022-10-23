<?php

class Database{

    public static $connection;

    public static function setUpConnection(){

        if(!isset(Database::$connection)){

            Database::$connection = new mysqli("localhost","root","","eshop","3306");
        }
    }
}
