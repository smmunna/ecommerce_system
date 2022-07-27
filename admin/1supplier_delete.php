<?php 
include('../connection.php');
$recv = $_REQUEST['id'];
$delete = "DELETE FROM `supplier_info` WHERE `supplier_id`=$recv";
$result = mysqli_query($conn,$delete);
if($result)
{
    echo '<script>alert("Deleted  Successfully");</script>';
        header("refresh: 0; url = http://localhost/All_Code/ecommerce_system/admin/1supplier_list.php");
}
else{
    echo '<script>alert("Something Went wrong..!!");</script>';
        header("refresh: 0; url = http://localhost/All_Code/ecommerce_system/admin/1supplier_list.php");
}
