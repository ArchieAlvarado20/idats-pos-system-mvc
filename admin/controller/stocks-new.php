<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'stocks-new';

    $productClass  = new Product();
    $products = $productClass->query("select * from tblproduct order by description desc limit 5");

require view_path('stocks/stocks-new');