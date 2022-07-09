<?php
include('../connection.php');
if (isset($_POST['product_name']) && isset($_POST['supplier_id']) && isset($_POST['categoryid']) && isset($_POST['instock']) && isset($_POST['unit']) && isset($_POST['price'])) {

    $product_name = $_POST['product_name'];
    $supplier_id = $_POST['supplier_id'];
    $categoryid = $_POST['categoryid'];
    $instock = $_POST['instock'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];

    //for uploading the image;
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];

    //Its the folder where image will be set;
    $folder = "../images/" . $filename;
    move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO `products`(`product_name`, `supplier_id`, `categoryid`,`instock`,`unit`, `price`, `image`) 
        VALUES ('$product_name','$supplier_id','$categoryid','$instock','$unit','$price','$filename')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Product Inserted Successfully");</script>';
        header('refresh:0; url= http://localhost/All_Code/ecommerce_system/admin/1showproduct.php');
    } else {
        echo '<script>alert("Not Inserted");</script>';
        header('refresh:0; url= http://localhost/All_Code/ecommerce_system/admin/1showproduct.php');
    }
}
