<?php
class Product {
    public function getTopSale($conn, int $quantity) {
        $result = $conn->query("SELECT * FROM `product` ORDER BY discount DESC LIMIT $quantity;") or die("top sale query failed");
        $topSaleProducts = array();
        while ($product = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $topSaleProducts[] = $product;
        }
        return $topSaleProducts;
    }
}