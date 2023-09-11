<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'pricing-edit';
$error = [];
$id = $_GET['id'] ?? null;
$product = new Product;
$row = $product->get_one(['id'=>$id]);

if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
  //  show($_POST);
  //  die;
    $_POST['barcode'] = empty($_POST['barcode']) ? $product->generate_barcode() : $_POST['barcode'];
    $_POST['date'] = date("Y-m-d H:i:s");

    $error = $product->validate_price($_POST,$row['id']);
    if(empty($error)){
      $product->update($row['id'],$_POST);   
      
      redirect('pricing');
    }
  
}

require view_path('pricing/pricing-edit');