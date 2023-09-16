<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'home';
$today = date('Y-m-d');
$countClass  = new Product();
$counts = $countClass->query("SELECT COUNT(*) AS count FROM tblproduct");
$criticals = $countClass->query("select sum(status = 1) as critical from tblproduct");
$full_stocks = $countClass->query("select sum(status = 0) as full_stock from tblproduct");
$users = new User;
$admins = $users->query("select sum(role = 'admin') as admin from tblusers");
$cashiers = $users->query("select sum(role = 'cashier') as cashier from tblusers");
$saleClass = new Sales();
$daily_sales = $saleClass->query("select sum(total) as total from tblcart where sdate = '$today' && status = 'Sold'");
$transaction = $saleClass->query("select trans_count as count from tblcart where sdate = '$today' && status = 'Sold' order by trans_count desc limit 1");
$cancel = $saleClass->query("select count(*) as count from tblcart where sdate = '$today' && status = 'Cancelled'");
$cashiers_duty =  $saleClass->query("select user_id as cashier from vw_sales where sdate = '$today' order by id desc limit 1");
$donuts = $saleClass->query("select description as month , view as total from tblproduct order by view desc limit 5");
foreach($donuts as $data){
    $month[] = $data['month'];
    $total[] = $data['total'];
}

$bar = $saleClass->query("select monthname(sdate) as months , sum(total) as totals from vw_sales where status = 'Sold' group by months limit 12");
foreach($bar as $data){
    $months[] = $data['months'];
    $totals[] = $data['totals'];
}



if(Auth::access('')){
    require view_path('Home');
}else{
    Auth::setMessage("You dont have access to the admin page");
    require view_path('auth/denied');
}



