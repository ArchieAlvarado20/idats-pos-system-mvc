<?php
defined("ABSPATH") ? "" : die();

$tab = $_GET['pg'] ?? 'pricing';

    $pricingClass = new Product();
    $pricings = $pricingClass->query("select * from tblproduct order by id desc");

require view_path('pricing/pricing');