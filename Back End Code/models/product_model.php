<?php
class Product {

    public function getAllProducts($conn) {
        $result = $conn->query("SELECT * FROM `product`") or die("all products query failed");
        $allProducts = array();
        while ($product = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $allProducts[] = $product;
        }
        return $allProducts;
    }

    public function getTopSale($conn, int $quantity) {
        $result = $conn->query("SELECT * FROM `product` ORDER BY discount DESC LIMIT $quantity;") or die("top sale query failed");
        $topSaleProducts = array();
        while ($product = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $topSaleProducts[] = $product;
        }
        return $topSaleProducts;
    }

    public function getTopRated($conn) {
        $result = $conn->query("SELECT * FROM `product` ORDER BY rate;") or die("top rated query failed");

        $topRatedProducts = array();
        while ($product = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $topRatedProducts[] = $product;
        }
        return $topRatedProducts;
    }

    public function getComingSoon($conn) {
        $result = $conn->query("SELECT * FROM `product` WHERE price = 0;") or die("coming soon query failed");

        $comingSoonProducts = array();
        while ($product = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $comingSoonProducts[] = $product;
        }
        return $comingSoonProducts;
    }

    public function getProduct($conn, $id) {
        $result = $conn->query("SELECT * FROM `product` WHERE id = $id") or die("product query failed");
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

}