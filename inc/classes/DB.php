<?php
if(!defined('__CONFIG__')){
    exit("You don't have a config file");
}
class DB{
    protected static $con;
    private function __construct(){
        try{
            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=test;','root',''); 
            self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT,false);
        }
        catch(PDOException $e){
            echo "Cron could not connect to database.";
            exit;
        }
    }

public static function getConnection(){
    //if this instance was not been started, start it.
    if(!self::$con){
        new DB();
    }
    //Return the writeable DB connection
    return self::$con;
}
}
