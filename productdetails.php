<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | Details</title>
    <link rel="icon" href="webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    include('connection.php');
    include('header.php');

    $recv = $_REQUEST['id'];
    ?>
    <!-- 1st section -->
    <section id="sec1">
        <div class="container">
            <h2 style="text-align: center;" class="txt1">Details of our Product</h2>
            <div class="row">
                <div class="col-lg-5">
                    <?php
                    $sql = "SELECT * FROM `products` WHERE `product_id`='$recv'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        $myimage = $row['image'];
                    ?>
                        <!-- Product details -->
                        <hr>
                        <img src="<?php echo 'images/' . $myimage; ?>" class="rounded mx-auto d-block" height="300" width="300" alt="" srcset="">
                        <p style="text-align: center;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-weight:400; font-size:18px;" class="p-4"><?php echo $row['product_name']; ?></p>
                        <p class="pprice">Price: <?php echo $row['price']; ?><span style="font-size: 18px;font-weight:bold">৳</span></p>

                </div>
                <div class="col-lg-7">
                    <hr>
                    <h3 style="font-family: 'Gill Sans';"><?php echo $row['product_name']; ?></h3>
                    <h4 style="font-family: 'Gill Sans';">Description:</h4>
                    <p style="font-family: 'Gill Sans';"><?php echo $row['unit']; ?></p>
                    <?php
                        $instock =  $row['instock'];
                        if ($instock <= 0) {
                    ?>
                        <p style="background-color: red; font-size:30px; color:aliceblue; width:45%;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="p-3">Out of the stock..!! </p>
                        <div class="row">
                            <div class="col-lg-8">
                                <h4>Payment Method</h4>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="webimage/bkash.png" class=" img-fluid" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="webimage/nagad.png" class=" img-fluid" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        } else {
                    ?>
                        <p style="background-color: green; color:aliceblue; width:15%;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="p-2">In Stock: <?php echo $instock; ?></p>

                        <div class="row">
                            <div class="col-lg-4">
                                <p class="txt2">
                                    *Read the deatils carefully !
                                </p> <br>
                                <a href="http://localhost/All_Code/ecommerce_system/cart/3cart.php?id=<?php echo $row['product_id']; ?>" class="btn btn-info">Buy Now</a>
                            </div>
                            <div class="col-lg-8">
                                <h4>Payment Method</h4>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="webimage/bkash.png" class="p-2 img-fluid" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4">
                                        <img src="webimage/nagad.png" class="p-2 img-fluid" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>



                    <?php
                        }
                    ?>

                </div>
            <?php
                    }
            ?>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<!-- For Styling -->
<style>
    .txt1 {
        padding-top: 80px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .txt2 {
        font-size: 18px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: red;
    }

    .pprice {
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 500;
        font-size: 20px;
        margin-top: -36px;
        color: blue;
    }
</style>