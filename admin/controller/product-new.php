<?php
$tab = $_GET['pg'] ?? 'product-new';
$error = [];

$categoryClass = new Category;
$categorys = $categoryClass->query("select * from tblcategory");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  // show($_POST);
  // die;
    $product = new Product();
    $_POST['date'] = date("Y-m-d H:i:s");
    $_POST['user_id'] = auth("id");
    $_POST['barcode'] = empty($_POST['barcode']) ? $product->generate_barcode() : $_POST['barcode'];
    $error = $product->validate($_POST);
    if(empty($error)){
      $product->insert($_POST); 
      $success = "sahishahsjahsjahsjahsja";
      redirect('product');
    } 
}
require view_path('product/product-new');