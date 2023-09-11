<?php
$tab = $_GET['pg'] ?? 'category-delete';
$error = [];
$id = $_GET['id'] ?? null;
$category = new Category;
$row = $category->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
            
           $category->delete($row['id']);
           redirect('category');     
}

require view_path('category/category-delete');