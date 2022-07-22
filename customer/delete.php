<?php
include('../connection.php');
$recv = $_REQUEST['id'];
echo $recv;
$sql ="DELETE FROM `customers` WHERE `customer_id`=$recv";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo '<script>alert("Customer Deleted Successfully");</script>';
    header("refresh:0; URL=http://localhost/All_Code/ecommerce_system/customer/2customer_list.php");
}
?>