<?php

class Cart
{
    public $user_id;

    public function __construct()
    {
        $this->user_id = $_SESSION["user_id"];
    }

    public function getCartProducts($conn)
    {
        $result = $conn->query("SELECT size, color, user_id, product_id, sum(quantity) as quantity FROM `cart` where user_id = $this->user_id group by product_id") or die("all products query failed");
        $ids = '';
        $quantity = array();
        $flag = false;
        while ($product_ids = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $ids .= $product_ids["product_id"] . ',';
            $quantity[] = $product_ids["quantity"];
            $flag = true;
        }
        if ($flag) {
            $ids = substr($ids, 0, -1);
            $result = $conn->query("SELECT * FROM `product` where id in ($ids)") or die("all products query failed");
            $cartProducts = array();
            $quantity = array_reverse($quantity);
            while ($product = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $product["quantity"] = array_pop($quantity);
                $cartProducts[] = $product;
            }
            return $cartProducts;
        }
        return null;
    }

    public function totalPrice($conn)
    {
        $result = $conn->query("SELECT * FROM `cart` where user_id = $this->user_id") or die("all products query failed");
        $ids = '';
        $quantity = array();
        $flag = false;
        while ($product_ids = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $ids .= $product_ids["product_id"] . ',';
            $quantity[] = $product_ids["quantity"];
            $flag = true;
        }
        if ($flag) {
            $ids = substr($ids, 0, -1);
            $result = $conn->query("SELECT * FROM `product` where id in ($ids)") or die("all products query failed");

            $totalPrice = 0;
            $quantity = array_reverse($quantity);
            while ($product = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $product["quantity"] = array_pop($quantity);
                $totalPrice += $product["price"] * $product["quantity"];
            }
            return $totalPrice;
        }
        return null;
    }

    public function countCart($conn) {
        $result = $conn->query("SELECT COUNT(DISTINCT product_id) as count FROM `cart` where user_id = $this->user_id") or die("all products query failed");
        return mysqli_fetch_array($result, MYSQLI_ASSOC)["count"];
    }
}