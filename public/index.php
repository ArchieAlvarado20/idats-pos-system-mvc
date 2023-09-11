<?php
session_start();
define("ABSPATH", true);

require_once '../admin/core/init.php';

$controller = $_GET['pg'] ?? "login-admin";
$controller = strtolower($controller);



if(file_exists("../admin/controller/".$controller. ".php")){
    require "../admin/controller/".$controller. ".php";
}else{
    echo "Controller Not Found";
}


