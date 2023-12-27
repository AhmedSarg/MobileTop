<?php

include 'models/connection.php';
include 'models/product.php';

$db = new Connection();

$conn = $db->conn;

$products = new Product();