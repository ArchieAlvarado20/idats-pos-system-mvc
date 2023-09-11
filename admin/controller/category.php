<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'category';
    $categoryClass = new Category();
    $categorys = $categoryClass->query("select * from tblcategory order by id desc");
require view_path('category/category');