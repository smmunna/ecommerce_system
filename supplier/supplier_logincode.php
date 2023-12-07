<?php
include('../connection.php');
session_start();
if(isset($_POST['email'])&& isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT `supplier_id` FROM `supplier_info` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);
    $mysqli_num_rows = mysqli_num_rows($result);
    if ($mysqli_num_rows) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header("Location:supplier_dashboard.php");
    } else {
        echo '<script>alert("Invalid Username or Password");</script>';
        header("refresh: 0; url = supplier_login.php");
    }
} else {
    echo '<script>alert("Something Went wrong");</script>';
    header("refresh: 0; url = supplier_login.php");
}
