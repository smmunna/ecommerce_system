<?php
include('../header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer | List</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align: center;">Customer List</h2>
                    <hr>
                    <table border="1" class="table">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Operation</th>
                        </tr>
                        <?php 
                        include('../connection.php');
                        $sql = "SELECT * FROM `customers`";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>

                            <tr>
                                <td><?php echo $row['customer_name']; ?></td>
                                <td><?php echo $row['customer_email']; ?></td>
                                <td><?php echo $row['customer_phone']; ?></td>
                                <td>
                                    <a href="http://localhost/All_Code/ecommerce_system/customer/delete.php?id=<?php echo $row['customer_id']; ?>">Delete</a>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                    </table>
                    <a href="http://localhost/All_Code/ecommerce_system/admin/1admindashboard.php">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </section>
    <?php include('../footer.php')  ?>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

<style>
    .row{
        padding-top: 5rem;
    }
</style>