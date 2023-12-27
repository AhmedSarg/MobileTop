<?php
include 'config.php';
$topSaleProducts = $products->getTopSale($conn, 5);

$topRatedProducts = $products->getTopRated($conn);

$comingSoonProducts = $products->getComingSoon($conn);
