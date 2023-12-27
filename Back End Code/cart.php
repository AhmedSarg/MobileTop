<?php
include 'config.php';

if(isset($_POST['add_to_cart'])){

    $product_Id = $_POST['Id'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_Id' AND user_id = '$userId'") or die('query failed');

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'Product in Cart';
    }else{
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$userId', '$productID',  '$size' , '$quantity',$color)") or die('query failed');
        $message[] = 'Added to Cart Successfully ';
    }

};

if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$updateId'") or die('query failed');
    $message[] = 'Updated successfully';
}

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
    header('location:index.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$userId'") or die('query failed');
    header('location:index.php');
}
