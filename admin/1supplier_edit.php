<?php
include('../connection.php');
session_start();
if (empty($_SESSION['username'])) {
    header("Location: http://localhost/All_Code/ecommerce_system/admin/1adminlogin.php");
}

$recv = $_REQUEST['id'];

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $edit = "UPDATE `supplier_info` SET `supplier_name`='$name',`phone`='$phone',`email`='$email' 
              WHERE `supplier_id`= $recv";
    if (mysqli_query($conn, $edit)) {
        echo '<script>alert("Updated Data Successfully");</script>';
        header("refresh: 0; url = http://localhost/All_Code/ecommerce_system/admin/1supplier_list.php");
    } else {
        echo '<script>alert("Not Updated , Something went wrong ..!");</script>';
        header("refresh: 0; url = http://localhost/All_Code/ecommerce_system/admin/1supplier_list.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard | Supplier List</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<?php include('../header.php') ?>

<body>

    <?php
    $recv = $_REQUEST['id'];
    $sql = "SELECT * FROM `supplier_info` where `supplier_id` = $recv;";
    $result = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <div class="row myrow">
            <div class="col-lg-12">
                <h2>Supplier List</h2>
                <hr>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['supplier_name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                ?>

                    <form action="" method="post">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>"> <br> <br>
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>"> <br> <br>
                        <label for="">Phone</label>
                        <input type="text" name="phone" value="<?php echo $phone; ?>"> <br> <br>
                        <button type="submit">Update</button>
                    </form>

                <?php
                }


                ?>

                </table>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

<style>
    .myrow {
        padding-top: 70px;
    }
</style>