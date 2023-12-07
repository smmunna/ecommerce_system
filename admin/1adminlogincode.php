<?php
session_start();

require_once('../config.php');
$url = $_ENV['BASE_URL'];

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

        header("Location: 1admindashboard.php");
    } else {
        echo '<script>alert("Invalid Username or Password");</script>';
        header("refresh: 0; url = 1adminlogin.php");
    }
} else {
    echo '<script>alert("Something Went wrong");</script>';
    header("refresh: 0; url = 1adminlogin.php");
}
