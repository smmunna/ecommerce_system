<?php
session_start();
require_once('../config.php');
$url = $_ENV['BASE_URL'];

if (empty($_SESSION['username'])) {
    header("Location: 1adminlogin.php");
}

include('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<?php include('../header.php') ?>

<body>


    <!-- Admin Can do these Operations -->
    <!-- 1st Secction -->
    <section id="sec1">
        <div class="row">
            <div class="col-lg-3">
                <ul class="list-group">
                    <li><a href="#section1">Dashboard <i class="fa-solid fa-gauge"></i></a></li>
                    <li><a href="#section2">Order's List <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg></a></li>
                    <li><a href="#section3">Customer's <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg></a></li>
                    <li><a href="#section4">Supplier's <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></a></li>
                    <li style="background-color: whitesmoke;"><a href="1adminlogout.php">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                                <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" />
                                <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" />
                            </svg></a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="content">
                    <section id="section1">
                        <h2 class="txt1">Dashboard Details</h2>
                        <hr>
                        <!-- For counting the total Products -->
                        <div class="row">
                            <div class="col-lg-4">
                                <!-- Total Products -->
                                <?php
                                include('../connection.php');
                                // counting total products..
                                $sql = "SELECT * FROM `products`";
                                $result = mysqli_query($conn, $sql);
                                // counting total customer's
                                $sql1 = "SELECT * FROM `customers`";
                                // counting total order's
                                $sql2 = "SELECT * FROM `payment_details`";
                                // counting total Category's
                                $sql3 = "SELECT * FROM `category`";
                                // counting total Supplier's
                                $sql4 = "SELECT * FROM `supplier_info`";
                                // Completed Order List from Invoice details
                                $sql5 = "SELECT * FROM `invoice_details` WHERE `payment`='Paid'";

                                $result = mysqli_query($conn, $sql);
                                $result1 = mysqli_query($conn, $sql1);
                                $result2 = mysqli_query($conn, $sql2);
                                $result3 = mysqli_query($conn, $sql3);
                                $result4 = mysqli_query($conn, $sql4);
                                $result5 = mysqli_query($conn, $sql5);

                                $count = mysqli_num_rows($result);
                                $count1 = mysqli_num_rows($result1);
                                $count2 = mysqli_num_rows($result2);
                                $count3 = mysqli_num_rows($result3);
                                $count4 = mysqli_num_rows($result4);
                                ?>
                                <h3 class="txt2">Total Products</h3>
                                <hr>
                                <p class="txt3"><?php echo $count ?></p>

                                <h3 class="txt2">Total Customer's</h3>
                                <hr>
                                <p class="txt3"><?php echo $count1 ?></p>

                            </div>
                            <div class="col-lg-4">
                                <h3 class="txt2">Total Order's</h3>
                                <hr>
                                <p class="txt3"><?php echo $count2 ?></p>
                                <h3 class="txt2">Total Category's</h3>
                                <hr>
                                <p class="txt3"><?php echo $count3 ?></p>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="txt2">Total Supplier's</h3>
                                <hr>
                                <p class="txt3"><?php echo $count4 ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="productlist">
                            <a href="1showproduct.php" class="plist">Click here to see All Product List</a>
                        </div>
                    </section>
                    <section id="section2">
                        <h2 class="txt1">Order Details</h2>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 style="display: flex;justify-content:center;">Total Order</h2>
                                <hr>

                                <p class="txt3"><?php echo $count2; ?></p>
                            </div>
                            <hr>
                            <div class="productlist">
                                <a href="1orderlist.php" class="plist">Click here to see Order List</a>
                            </div>
                        </div>
                    </section>
                    <section id="section3">
                        <h2 class="txt1">Customer Details</h3>
                            <hr>
                            <h2>Order Completed List</h2>
                            <div class="productlist">
                                <a href="1completed_paymentlist.php" class="plist">Click here to see</a>
                            </div>
                            <hr>
                            <h2>Customer List</h2>
                            <div class="productlist">
                                <a href="<?php echo $url; ?>/customer/2customer_list.php" class="plist">Click here to see</a>
                            </div>
                    </section>
                    <section id="section4">
                        <h2 class="txt1">Supplier's Details</h2>
                        <hr>
                        <?php
                        // For Supplier
                        $sql6 = "SELECT * FROM `supplier_info`";
                        //  For Supply
                        $sql7 = "SELECT * FROM `supply_info`";

                        $result6 = mysqli_query($conn, $sql6);
                        $result7 = mysqli_query($conn, $sql7);
                        $count5 = mysqli_num_rows($result6);
                        $count6 = mysqli_num_rows($result7);
                        ?>
                        <h3 style="text-align: center;">Total Supplier = <?php echo $count5;  ?></h3>
                        <h3 style="text-align: center;">Completed Supply = <?php echo $count6;  ?></h3>
                        <hr>
                        <h4>Supplier</h4>
                        <a href="1supplier_list.php">Click here to see </a>
                        <hr>
                        <h4>Completed Supply</h4>
                        <a href="1completed_supply.php">Click here to see </a>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    html {
        scroll-behavior: smooth;
    }

    .row {
        padding-top: 30px;
    }

    ul {
        position: fixed;
    }

    .list-group {
        list-style: none;
        height: 100%;
        width: 360px;
        background-color: whitesmoke;
        margin-top: 0;
        margin-left: 0;
        box-shadow: 2px 0 5px black;
        position: top fixed;
    }

    .list-group li {
        margin-top: 70px;
        padding: 5px;

    }

    .list-group li a {
        text-decoration: none;
        font-size: 20px;
        padding: 8px;
        display: flex;
        justify-content: center;
        color: black;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .list-group li a:hover {
        background-color: white;
    }

    section {
        height: 100vh;

    }

    /* #section1 {
        top: 0;
        left: 0;
        height: 100vh;
        width: 100%;
        background: linear-gradient(-45deg, white 30%, yellow 0%);

    } */

    /* #section2 {
        top: 0;
        left: 0;
        height: 100vh;
        width: 100%;
        background: linear-gradient(-45deg, white 30%, lightgreen 0%);

    } */

    /* #section3 {
        top: 0;
        left: 0;
        height: 100vh;
        width: 100%;
        background: linear-gradient(-45deg, white 30%, lightblue 0%);

    } */

    /* #section4 {
        top: 0;
        left: 0;
        height: 100vh;
        width: 100%;
        background: linear-gradient(-45deg, white 30%, tomato 0%);

    } */

    .txt1 {
        padding-top: 70px;
        text-align: center;
        font-size: 50px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 700;
    }

    .txt2 {
        font-size: 40px;
        font-weight: 600;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: center;
    }

    .txt3 {
        font-size: 40px;
        font-weight: 700;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        text-align: center;
        color: red;
    }

    .productlist {
        display: flex;
        justify-content: center;
    }

    .plist {
        text-decoration: none;
        font-size: 30px;
        /* font-weight: 700px; */
        font-weight: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: black;
        padding: 10px;
        border-bottom: 3px dotted greenyellow;
    }
</style>