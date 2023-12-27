<?php

if (isset($_POST['add'])) {

    $name = $_POST['name'];
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
        $picture_path = substr($picture_path, 22);
        $insert = "INSERT INTO product(name,model,price,discount,rate,picture) VALUES('$name', '$model', '$price','$discount','$rate','$picture_path')";
        mysqli_query($conn, $insert);
    } else {
        echo "<h3> Failed to upload image!</h3>";
    }
    header('Location: ' . $_SERVER['REQUEST_URI']);
}

if (isset($_POST['update'])) {
    $id = $_POST["update_id"];
    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $rate = $_POST['rate'];


    $flag = false;
    $update = "UPDATE product SET ";
    if ($name != '') {
        $update .= "name = '$name', ";
        $flag = true;
    }
    if ($model != '') {
        $update .= "model = '$model', ";
        $flag = true;
    }
    if ($price != '') {
        $update .= "price = $price, ";
        $flag = true;
    }
    if ($discount != '') {
        $update .= "discount = $discount, ";
        $flag = true;
    }
    if ($rate != '') {
        $update .= "rate = $rate, ";
        $flag = true;
    }
    if (isset($_FILES['picture'])) {
        $imgname = $_FILES['picture']['name'];
        $imgtmp = $_FILES["picture"]["tmp_name"];
        $get_old_path = "SELECT picture from product where id = $id";
        $result = $conn->query($get_old_path);
        $old_picture_path ='../Front End Code/web/'.mysqli_fetch_array($result, MYSQLI_ASSOC)["picture"];
        if (file_exists($old_picture_path)) {
            unlink($old_picture_path);
        }
        if ($name == '' or $model == '') {
            if (move_uploaded_file($imgtmp, $old_picture_path)) {
                echo "<h3> Image uploaded successfully!</h3>";
            } else {
                echo "<h3> Image uploaded Failed!</h3>";
            }
        }
        else {
            $picture_path = str_replace(' ', '-', strtolower($model));
            $picture_path .= '.png';
            $picture_path = strtolower($name) . '-' . $picture_path;
            $picture_path = '../Front End Code/web/Images/products/' . $picture_path;
            if (move_uploaded_file($imgtmp, $picture_path)) {
                echo "<h3> Image uploaded successfully!</h3>";
                $picture_path = substr($picture_path, 22);
                $update .= "picture = '$picture_path', ";
            } else {
                echo "<h3> Image uploaded Failed!</h3>";
            }
        }
        header('Location: ' . $_SERVER['REQUEST_URI']);

    }
    if ($flag) {
        $update = substr($update, 0, -2);
        $update .= " WHERE id = $id";
        echo $update;
        mysqli_query($conn, $update);
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST["delete_id"];
    $get_old_path = "SELECT picture from product where id = $id";
    $result = $conn->query($get_old_path);
    $old_picture_path ='../Front End Code/web/'.mysqli_fetch_array($result, MYSQLI_ASSOC)["picture"];
    if (file_exists($old_picture_path)) {
        unlink($old_picture_path);
    }
    $delete = "DELETE FROM product WHERE id = $id";
    mysqli_query($conn, $delete);
    header('Location: ' . $_SERVER['REQUEST_URI']);
}

$allProducts = $products->getAllProducts($conn);
