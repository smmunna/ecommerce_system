<?php
include('../connection.php');
session_start();
if (empty($_SESSION['username'])) {
    header("Location: 1adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard | Completed Supply List</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<?php include('../header.php') ?>

<body>

    <?php
    $sql = "SELECT * FROM `supply_info`";
    $result = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <div class="row myrow">
            <div class="col-lg-12">
                <h2>Supplier List</h2>
                <hr>
                <table class="table" border="1">
                    <tr>
                        <th>Product ID</th>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Delivary Date</th>
                        <th>Supply Status</th>
                    </tr>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        $pid = $row['product_id'];
                        $oid = $row['order_id'];
                        $cname = $row['customer_name'];
                        $delivary = $row['delivary'];
                        $status = $row['supply_status'];
                    ?>

                            <tr>
                                <td><?php echo $pid; ?></td>
                                <td><?php echo $oid; ?></td>
                                <td><?php echo $cname; ?></td>
                                <td><?php echo $delivary; ?></td>
                                <td><?php echo $status; ?></td>
                                
                            </tr>

                    <?php
                    }


                    ?>

                </table>
            </div>
        </div>
    </div>

    <h4 style="text-align: center;"><a href="1admindashboard.php">Back to Dashboard</a></h4>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
<style>
    .myrow {
        padding-top: 70px;
    }
</style>