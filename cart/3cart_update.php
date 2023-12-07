<?php
include('../connection.php');
session_start();
$recv = $_SESSION['id'];

if (isset($_POST['name']) && isset($_POST['product_id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $quantity = $_POST['quantity'];
    $instock = $_POST['instock'];
    $product_id = $_POST['product_id'];
    $supplier_id = $_POST['supplier_id'];
    $product_name = $_POST['product_name'];
    $updated_price = $_POST['updated_price'];
    $payment_option = $_POST['payment_option'];
    $payment_number = $_POST['payment_number'];
    $transaction_id = $_POST['transaction_id'];

    if ($instock <= 0) {
        echo '<script>alert("Product is Out of the Stock");</script>';
        header('refresh:0; url= http://localhost/All_Code/ecommerce_system/productdetails.php');
    } else {

        $newquantity = $instock - $quantity;
        $sql1 = "UPDATE `products` SET `instock`='$newquantity' WHERE `product_id`='$recv'";
        $result1 = mysqli_query($conn, $sql1);

        $sql = "INSERT INTO `payment_details`(`name`, `email`, `phone`, `address`, `quantity`, `product_id`,`supplier_id`, `product_name`, `updated_price`, `payment_number`, `transaction_id`,`payment_option`) 
        VALUES ('$name','$email','$phone','$address','$quantity','$product_id','$supplier_id','$product_name','$updated_price','$payment_number','$transaction_id','$payment_option')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("Payment Successfull, Wait for the Confirmation");</script>';
            header('refresh:0; url=http://localhost/All_Code/ecommerce_system/customer/2customerdashboard.php');
        } else {
            echo '<script>alert("Not Inserted");</script>';
            header('refresh:0; url=http://localhost/All_Code/ecommerce_system/index.php');
        }
    }
}
