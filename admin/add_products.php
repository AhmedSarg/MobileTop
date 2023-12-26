<?php
include 'C:\xampp\htdocs\e-commerce\Back End Code\connection.php';

if(isset($_POST['submit'])){
   
    $name =  $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $image = $_POST['image'];
    $imageup = "Images".$image;
   
    $insert = "INSERT INTO product(name,model,price,discount,image) VALUES('$name', '$model', '$price','$discount','$imageup')";
    mysqli_query($conn,$insert);
}

?>

<form action="" method="post">
      <h3>Insert Products</h3>
      
      <input type="text" name="name" required placeholder="Productname" >
      <input type="text" name="model" required placeholder="Model" >
      <input type="text" name="price" required placeholder="Product Price" >
      <input type="text" name="discount" required placeholder="Discount">
      <input type="file" name="image" required placeholder="Enter image source">
      <input type="submit" name="submit" class="btn" value="store product">
    
   </form>