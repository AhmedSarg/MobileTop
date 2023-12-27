<?php
include 'config.php';
$topSaleProducts = $products->getTopSale($conn, 5);
