<?php
session_start();
include('../connection.php');
if (isset($_POST['customer_email']) && isset($_POST['customer_password'])) {
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];

    $sql = "SELECT `customer_id` FROM `customers` WHERE `customer_email`='$customer_email' AND `customer_password`='$customer_password'";
    $result = mysqli_query($conn, $sql);
    $mysqlinumrows = mysqli_num_rows($result);
    if ($mysqlinumrows) {
        $_SESSION['customer_email'] = $customer_email;
        $_SESSION['customer_password'] = $customer_password;
        header("Location:http://localhost/All_Code/ecommerce_system/customer/2customerdashboard.php");
    } else {
        echo '<script>alert("Invalid Username or Password");</script>';
        header("refresh:0; URL=http://localhost/All_Code/ecommerce_system/customer/2customerlogin.php");
    }
} else {
    echo 'No data found Here..';
}
