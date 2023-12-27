<?php

$topSaleProducts = $products->getTopSale($conn, 5);

$topRatedProducts = $products->getTopRated($conn);

$comingSoonProducts = $products->getComingSoon($conn);

$allProducts = $products->getAllProducts($conn);
