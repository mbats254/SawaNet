<?php
include 'php/dbconnector.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$confirm_password = md5($_POST['confirm_password']);
if($confirm_password == $password)
{
    $insert = mysqli_query($connect,"INSERT INTO users(name,email,password)
    VALUES('$name','$email','$password')");
    
    if($insert)
    {
        session_start();
        $_SESSION['email'] = $email;
         header("location: home.php");
    }
    else {
       
    }
}



?>