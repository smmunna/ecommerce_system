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
    <title>Completed | Payment List</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <?php include('../header.php');
    ?>
    <div class="container">

        <h2 class="txt1" style="text-align: center;">Completed Payment List</h2>
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
                    <th>Phone Number</th>
                    <th>Payment</th>
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
                $sql = "SELECT * FROM `invoice_details` WHERE `payment`='Paid' OR `payment`='Cash on Delivery' AND `name` LIKE '%$recv%' ORDER BY order_id DESC LIMIT $page_first_result,5";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <!-- Put all the values here from the database -->
                    <tr>
                        <td><?php echo $row['order_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td>+880<?php echo $row['payment_number'] ?></td>
                        <td style="color: green;font-size:20px;font-weight:500;"><?php echo $row['payment'] ?></td>

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
                    $sql1 = "SELECT * FROM `invoice_details`";
                    $result1 = mysqli_query($conn, $sql1);
                    $count = mysqli_num_rows($result1);
                    $i = ($count / 5);
                    $page = ceil($i);

                    for ($target = 1; $target <= $page; $target++) {
                    ?>

                        <li class="page-item"><a class="page-link" href="1completed_paymentlist.php?page=<?php echo $target; ?>"><?php echo $target; ?></a></li>

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
        <a href="http://localhost/All_Code/ecommerce_system/admin/1admindashboard.php" class="btn btn-success" style="margin-bottom: 20px;">Back to Dashboard</a>
        <!-- <a href="1orderlist.php" class="btn btn-primary" style="float: right;">Show All</a> <br><br> -->
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