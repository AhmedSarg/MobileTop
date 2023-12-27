<?php
include 'config.php';

if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass =  $_POST['cpassword'];
   
 
    $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND  password = '$pass'") or die('query failed');
 
    if(mysqli_num_rows($select) > 0){
        echo "<script type ='text/javascript'> alert('user already exist!')</script>";
    }else{
       mysqli_query($conn, "INSERT INTO `user`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
       echo "<script type ='text/javascript'> alert('successfully register')</script>";
       header('Location: home.php');

    }
 
 }
?>