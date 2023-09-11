<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'inventory';
    $inventoryClass  = new product();
    $inventorys = $inventoryClass->query("select * from tblproduct order by id desc");
require view_path('stocks/inventory');