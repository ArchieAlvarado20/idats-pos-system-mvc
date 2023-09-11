<?php
$tab = $_GET['pg'] ?? 'category-new';
$error = [];
if($_SERVER['REQUEST_METHOD'] == "POST"){
  // show($_POST);
  // die;

    $category = new Category();
    $error = $category->validate($_POST);
    if(empty($error)){
       $category->insert($_POST); 
        redirect('category');
    } 
}
require view_path('category/category-new');