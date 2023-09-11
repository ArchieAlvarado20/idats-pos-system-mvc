<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'home';
$today = date('Y-m-d');
$countClass  = new Product();
$counts = $countClass->query("SELECT COUNT(*) AS count FROM tblproduct");
$criticals = $countClass->query("select sum(status = 1) as critical from tblproduct");
$users = $countClass->query("select count(*) as user from tblusers");
$saleClass = new Sales();
$daily_sales = $saleClass->query("select sum(total) as total from tblcart where sdate = '$today' && status = 'Sold'");
$transaction = $saleClass->query("select count(*) as count from tblcart where sdate = '$today' && status = 'Sold'");
$cancel = $saleClass->query("select count(*) as count from tblcart where sdate = '$today' && status = 'Cancelled'");


if(Auth::access('')){
    require view_path('Home');
}else{
    Auth::setMessage("You dont have access to the admin page");
    require view_path('auth/denied');
}



