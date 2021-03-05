<?php
//if there is no constant called __CONFIG__, don't load this file
if(!defined("__CONFIG__")){
    exit("You don't have a config file");
}

//our config is bellow



//include the DB.php file
include_once "classes/DB.php";

$con = DB::getConnection();

?>