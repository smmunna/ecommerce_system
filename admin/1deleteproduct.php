<?php 
include('../connection.php');

$recv = $_REQUEST['id']; 

$sql = "DELETE FROM `products` WHERE `product_id`='$recv';";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo '<script>alert("Data Deleted Successfully");</script>';
    header('refresh:0; url= http://localhost/All_Code/ecommerce_system/admin/1showproduct.php');
}
else{
   
    echo '<script>alert("Not Deleted");</script>';
    header('refresh:0; url= http://localhost/All_Code/ecommerce_system/admin/1showproduct.php');
}
