<?php
include('../connection.php');
session_start();
if (empty($_SESSION['username'])) {
    header("Location: http://localhost/All_Code/ecommerce_system/admin/1adminlogin.php");
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
    $sql = "SELECT * FROM `supplier_info`";
    $result = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <div class="row myrow">
            <div class="col-lg-12">
                <h2>Supplier List</h2>
                <hr>
                <table class="table" border="1">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Operation</th>
                    </tr>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['supplier_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                    ?>

                            <tr>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td>
                                    <a style="text-decoration: none;" href="1supplier_edit.php?id=<?php echo $row['supplier_id']; ?>">Edit&nbsp;&nbsp;| </a>
                                    <a style="text-decoration: none;" href="1supplier_delete.php?id=<?php echo $row['supplier_id']; ?>">&nbsp;&nbsp; Delete</a>
                                </td>
                            </tr>

                    <?php
                    }


                    ?>

                </table>
            </div>
        </div>
    </div>

    <h4 style="text-align: center;"><a href="http://localhost/All_Code/ecommerce_system/admin/1admindashboard.php">Back to Dashboard</a></h4>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
<style>
    .myrow {
        padding-top: 70px;
    }
</style>