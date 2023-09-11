<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'product-edit';
$error = [];
$id = $_GET['id'] ?? null;
$product = new Product;
$row = $product->get_one(['id'=>$id]);

$categoryClass = new Category;
$categorys = $categoryClass->query("select * from tblcategory");


if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
  
    $_POST['barcode'] = empty($_POST['barcode']) ? $product->generate_barcode() : $_POST['barcode'];

    // if(!empty($_FILES['image']['name']))
    // {
    //   $_POST['image'] = $_FILES['image'];
    // }
    $error = $product->validate($_POST,$row['id']);
    if(empty($error)){

      $product->update($row['id'],$_POST);   
      
      redirect('product');
    }
  
}

require view_path('product/product-edit');