<?php

if (isset($_POST['add_cart_without_details'])) {
    $user_id = $_SESSION["user_id"];
    $product_id = $_POST['product_id'];
    mysqli_query($conn, "INSERT INTO `cart`(user_id, product_id, quantity) VALUES('$user_id', '$product_id', 1)") or die('query failed');
    header('Location: ' . $_SERVER['REQUEST_URI']);
};

if (isset($_POST['add_cart_with_details'])) {
    $user_id = $_SESSION["user_id"];
    $product_id = $_POST['product_id'];
    $quantity = $_POST["quantity"];
    $color = $_POST["color"];
    $size = $_POST["size"];
    echo $quantity;
    echo $color;
    echo $size;
    mysqli_query($conn, "INSERT INTO `cart`(user_id, product_id, quantity, color, size) VALUES('$user_id', '$product_id', $quantity, '$color', '$size')") or die('query failed');
    header('Location: ' . $_SERVER['REQUEST_URI']);
};

$cartProducts = $carts->getCartProducts($conn);

$countCart = $carts->countCart($conn);

$sumCart = $carts->totalPrice($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["quantity-in-cart"])) {
    $newQuantity = $_POST["quantity-in-cart"];
    echo $newQuantity;
    $user_id = $_SESSION["user_id"];
    $product_id = $_POST["product_id"];
    $result = "UPDATE `cart` SET quantity = $newQuantity where user_id = $user_id and product_id = $product_id";
    mysqli_query($conn, $result);
    header('Location: ' . $_SERVER['REQUEST_URI']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["delete_cart"])) {
    $user_id = $_SESSION["user_id"];
    $product_id = $_POST["product_id"];
    $result = "DELETE FROM `cart` where user_id = $user_id and product_id = $product_id";
    mysqli_query($conn, $result);
    header('Location: ' . $_SERVER['REQUEST_URI']);
}

