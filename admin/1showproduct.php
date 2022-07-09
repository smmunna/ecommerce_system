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
    <title>Admin | All Product</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <?php include('../header.php');
    ?>
    <div class="container">

        <h2 class="txt1" style="text-align: center;">All Product List</h2>
        <form action="" method="post">
            <input type="text" name="search_name" placeholder="Search by Product Name" required>
            <button type="submit">Search</button>
        </form>
        <hr>
        <!-- Fetching the data from the database -->
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Supplier ID</th>
                    <th>Category ID</th>
                    <th>In Stock</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Product Image</th>
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
                $sql = "SELECT * FROM `products` WHERE `product_name` LIKE '%$recv%' ORDER BY product_id DESC LIMIT $page_first_result,5";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $myimage = $row['image'];
                ?>
                    <!-- Put all the values here from the database -->
                    <tr>
                        <td><?php echo $row['product_id'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><?php echo $row['supplier_id'] ?></td>
                        <td><?php echo $row['categoryid'] ?></td>
                        <td><?php echo $row['instock'] ?></td>
                        <td><?php echo $row['unit'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td>
                            <?php
                            echo "<img src ='../images/$myimage' height=50 width=50>";
                            ?>
                        </td>
                        <td><a href="1updateproduct.php?id=<?php echo $row['product_id']; ?>">Update</a></td>
                        <td><a href="1deleteproduct.php?id=<?php echo $row['product_id']; ?>">Delete</a></td>
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
                    $sql1 = "SELECT * FROM `products`";
                    $result1 = mysqli_query($conn, $sql1);
                    $count = mysqli_num_rows($result1);
                    $i = ($count / 5);
                    $page = ceil($i);

                    for ($target = 1; $target <= $page; $target++) {
                    ?>

                        <li class="page-item"><a class="page-link" href="1showproduct.php?page=<?php echo $target; ?>"><?php echo $target; ?></a></li>

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
        <a href="1addproduct.php" class="btn btn-primary" style="float: right;">Add New Product</a> <br><br>
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