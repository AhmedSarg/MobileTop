<?php
include '../Back End Code/config.php';

if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $rate = $_POST['rate'];

    $picture_path = str_replace(' ', '-', strtolower($model));
    $picture_path .= '.png';
    $picture_path = strtolower($name) . '-' . $picture_path;
    $picture_path = '../Front End Code/web/Images/products/' . $picture_path;

    $imgname = $_FILES['picture']['name'];
    $imgtmp = $_FILES["picture"]["tmp_name"];

    if (move_uploaded_file($imgtmp, $picture_path)) {
        echo "<h3> Image uploaded successfully!</h3>";
        $picture_path = substr($picture_path,22);
        $insert = "INSERT INTO product(name,model,price,discount,rate,picture) VALUES('$name', '$model', '$price','$discount','$rate','$picture_path')";
        mysqli_query($conn,$insert);
    } else {
        echo "<h3> Failed to upload image!</h3>";
    }
}

?>