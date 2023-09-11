<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'category-edit';
$error = [];
$id = $_GET['id'] ?? null;
$category = new Category;
$row = $category->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
  //  show($_POST);
  //  die;
  $error = $category->validate($_POST,$row['id']);
    if(empty($error)){
      $category->update($row['id'],$_POST);   
      redirect('category');
    }
  
}

require view_path('category/category-edit');