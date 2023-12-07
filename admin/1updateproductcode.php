<?php
include('../connection.php');
if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['supplier_id']) && isset($_POST['categoryid']) && isset($_POST['instock']) && isset($_POST['unit']) && isset($_POST['price'])) {
    $product_id = $_POST['product_id'];
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

    $sql = "UPDATE `products` SET `product_id`='$product_id',`product_name`='$product_name',`supplier_id`='$supplier_id',`categoryid`='$categoryid',`instock`='$instock',`unit`='$unit',`price`='$price',`image`='$filename' 
            WHERE `product_id`='$product_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Product updated Successfully");</script>';
        header('refresh:0; url=1showproduct.php');
    } else {
        echo '<script>alert("Not Inserted Product");</script>';
        header('refresh:0; url=1showproduct.php');
    }
}
