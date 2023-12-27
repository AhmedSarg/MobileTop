<?php

include 'models/connection.php';
include 'models/product_model.php';
include 'models/cart_model.php';

session_start();

$db = new Connection();

$conn = $db->conn;

$products = new Product();

$carts = new Cart();