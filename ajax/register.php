<?php
    //allow the config
    define('__CONFIG__',true);
    
    //require the config
    require_once('../inc/config.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //always retrun json format
        header('Content-type: application/json');

        $return = [];


        $return['redirect'] = './index.php';
        $return['name'] = 'kalob taulien';

        echo json_encode($return, JSON_PRETTY_PRINT);
        exit();
    }else{
        exit('test');
    }






?>