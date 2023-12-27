<?php

include 'models/connection.php';
include 'models/product_model.php';

$db = new Connection();

$conn = $db->conn;

$products = new Product();