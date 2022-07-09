<?php
session_start();
include('../connection.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT `id` FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);
    $mysqli_num_rows = mysqli_num_rows($result);
    if ($mysqli_num_rows) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location:http://localhost/All_Code/ecommerce_system/admin/1admindashboard.php");
    } else {
        echo '<script>alert("Invalid Username or Password");</script>';
        header("refresh: 0; url = http://localhost/All_Code/ecommerce_system/admin/1adminlogin.php");
    }
} else {
    echo '<script>alert("Something Went wrong");</script>';
    header("refresh: 0; url = http://localhost/All_Code/ecommerce_system/admin/1adminlogin.php");
}
