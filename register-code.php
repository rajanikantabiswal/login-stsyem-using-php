<?php
session_start();
include "db/config.php";
$user_name=$_POST['name'];
$user_email=$_POST['email'];
$user_mobile=$_POST['mobile'];
$user_password=$_POST['password'];

$check_email_query="SELECT * FROM user WHERE user_email='$user_email' LIMIT 1";
$check_email_query_run= mysqli_query($conn, $check_email_query);

if(mysqli_num_rows($check_email_query_run)>0){
    $_SESSION['status']= "Email Id already exist";
    header("Location: register.php");
}else{
    //insert Data
    $query="INSERT INTO user(user_name, user_email,user_mobile, password) VALUES('$user_name', '$user_email', '$user_mobile', '$user_password')";
    $query_run=mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['status']= "Registration successfull. <a href='login.php'><span class='text-blue-500 underline'>Login Here</span></a>";
        header("Location: register.php");
    }else{
        $_SESSION['status']= "Registration failed";
        header("Location: register.php");
    }
}
?>