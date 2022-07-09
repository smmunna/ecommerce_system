<link rel="icon" href="../webimage/shopicon.png" type="image/png">
<?php
include('../connection.php');
include('../header.php');
session_start();
$myemail = $_SESSION['customer_email'];
if (empty($_SESSION['customer_email'])) {
    header("Location:http://localhost/All_Code/ecommerce_system/customer/2customerlogin.php");
}

$sql1 = "SELECT  `customer_name` FROM `customers` WHERE `customer_email`='$myemail'";
$query1 = mysqli_query($conn, $sql1);
while ($row1 = mysqli_fetch_assoc($query1)) {
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer | Dashboard</title>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>

    <body>


        <!-- 1st Secction -->
        <section id="sec1">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="list-group">
                        <li style="color: white; font-size:22px">Hello dear,<a href="#" style="color: orange;"><?php echo $row1['customer_name']; ?></a></li>

                    <?php
                }

                    ?>
                    <li style="background-color: green;"><a href="http://localhost/All_Code/ecommerce_system/shopnow.php" style="color: black;">Shop Now</a></li>
                    <li style="background-color: whitesmoke;"><a href="2customerlogout.php">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                                <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" />
                                <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" />
                            </svg></a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="content">
                        <section id="section1">
                            <h2 class="txt1">Customer Dashboard Details</h2>
                            <hr>
                            <!-- For counting the total Products -->
                            <div class="row">
                                <div class="col-lg-4">
                                    <!-- Total Products -->
                                    <div class="productlist">

                                        <table class="table table-hover">
                                            <tr>
                                                <th scope="row" style="font-size: 20px">Invoice List</th>
                                                <th scope="row" style="font-size: 20px">Issue Date</th>
                                            </tr>
                                            <?php
                                            $count = 1;
                                            $sql = "SELECT * FROM `invoice_details` WHERE `email`='$myemail'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td scope="row"><a class="invoi" href="http://localhost/All_Code/ecommerce_system/customer/2customerinvoice.php?id=<?php echo $row['product_id']; ?>">Invoice-<?php echo $count++; ?></a></td>
                                                    <td scope="row"><?php echo $row['issue_date']; ?></td>
                                                </tr>
                                            <?php
                                            }

                                            ?>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-8">

                                </div>
                            </div>
                            <hr>

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
            background-color: gray;
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

        #section1 {
            top: 0;
            left: 0;
            height: 100vh;
            width: 100%;
            background: linear-gradient(-45deg, white 30%, yellow 0%);

        }



        .txt1 {
            padding-top: 45px;
            text-align: center;
            font-size: 50px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 700;
        }


        .invoi {
            text-align: center;
            text-decoration: none;
            font-size: 23px;
            color: blue;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 500;
        }
    </style>