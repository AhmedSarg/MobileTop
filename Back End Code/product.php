<?php
global $product;
global $error;
$error= false;
if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $product = $products->getProduct($conn, $id);
        if ($product == null) {
            $error = true;
        }
}
else {
    $error = true;
}
$topSaleProducts = $products->getTopSale($conn, 5);