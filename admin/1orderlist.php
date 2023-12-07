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
    <title>Customer | Order List</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <?php include('../header.php'); ?>

    <div class="container">

        <h2 class="txt1" style="text-align: center;">Order List</h2>
        <form action="" method="post">
            <input type="text" name="search_name" placeholder="Search by Customer Name" required>
            <button type="submit">Search</button>
        </form>
        <hr>
        <!-- Fetching the data from the database -->
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Order Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Quantity</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Payment Number</th>
                    <th>Payment Option</th>
                    <th>Transaction ID</th>
                    <th colspan="2">Operation</th>

                </tr>

                <?php
                //For Searching-->
                if (isset($_POST['search_name'])) {
                    $recv =  $_POST['search_name'];
                }
                // FOR getting the page number from the URL
                global $get_page;
                if (isset($_GET['page'])) {
                    $get_page = $_GET['page'];
                }
                if ($get_page == "" || $get_page == "1") {
                    $target_page = 1;
                } else {
                    $target_page = $_GET['page'];
                }

                //determine the sql LIMIT starting number for the results on the displaying page  
                $page_first_result = ($target_page - 1) * 5;

                global $recv;
                $sql = "SELECT * FROM `payment_details` WHERE `name` LIKE '%$recv%' ORDER BY order_id DESC LIMIT $page_first_result,5";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <!-- Put all the values here from the database -->
                    <tr>
                        <td><?php echo $row['order_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['product_id'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td>+880<?php echo $row['payment_number'] ?></td>
                        <td><?php echo $row['payment_option'] ?></td>
                        <td><?php echo $row['transaction_id'] ?></td>
                        <td>
                            <a href="1invoice.php?order_id=<?php echo $row['order_id']; ?>">Invoice</a>
                        </td>

                    </tr>
                <?php
                }
                ?>

            </table>
        </div>
        <div style="display: flex;justify-content:center;">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <?php
                    // For pagination -->
                    $sql1 = "SELECT * FROM `payment_details`";
                    $result1 = mysqli_query($conn, $sql1);
                    $count = mysqli_num_rows($result1);
                    $i = ($count / 5);
                    $page = ceil($i);

                    for ($target = 1; $target <= $page; $target++) {
                    ?>

                        <li class="page-item"><a class="page-link" href="1orderlist.php?page=<?php echo $target; ?>"><?php echo $target; ?></a></li>

                    <?php
                    }
                    ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Back to Dash Board -->
        <a href="1admindashboard.php" class="btn btn-success">Back to Dashboard</a>
        <a href="1orderlist.php" class="btn btn-primary" style="float: right;">Show All</a> <br><br>
    </div>
    <?php include('../footer.php')  ?>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

<!-- Styling with internal css -->
<style>
    .txt1 {
        padding-top: 80px;
    }
</style>