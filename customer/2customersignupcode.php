<?php
include('../connection.php');
session_start();

require_once('../config.php');
$url = $_ENV['BASE_URL'];

if (isset($_POST['customer_name']) && isset($_POST['customer_email']) && isset($_POST['customer_password']) && isset($_POST['customer_phone']) && isset($_POST['city']) && isset($_POST['postal_code']) && isset($_POST['country'])) {
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];
    $customer_phone = $_POST['customer_phone'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];



    $sql = "INSERT INTO `customers`(`customer_name`, `customer_email`, `customer_password`, `customer_phone`,`city`,`postal_code`, `country`) 
        VALUES ('$customer_name','$customer_email','$customer_password','$customer_phone','$city','$postal_code','$country')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['customer_email'] = $customer_email;
        echo '<script>alert("Data Inserted Successfully");</script>';
        header('refresh:0; url= 2customerdashboard.php');
    } else {
        echo '<script>alert("Not Inserted");</script>';
        header('refresh:0; url= 2customerlogin.php');
    }
}
