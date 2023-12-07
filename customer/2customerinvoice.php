<title>Customer | Invoice</title>
<link rel="icon" href="../webimage/shopicon.png" type="image/png">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
session_start();
include('../header.php');
include('../connection.php');

require_once('../config.php');
$brandName = $_ENV['BRAND_NAME'];

$recv = $_REQUEST['id'];
$cusmail = $_SESSION['customer_email'];
if (empty($_SESSION['customer_email'])) {
    header("Location:2customerlogin.php");
}
$count = 1;
$sql = "SELECT * FROM `invoice_details` WHERE `product_id`='$recv'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {

?>



    <h1 style="text-align: center;margin-top:80px;">Your Invoice</h1>
    <hr>
    <div class="container" id="printableArea">
        <div>
            <h2 class="logo1"><?php echo $brandName ?></h2>

            <div class="row">
                <div class="col-lg-4">
                    <h5>Billed To</h5>
                    <hr>
                    <p class="txt1"><?php echo $row['name']; ?></p>
                    <p class="txt1"><?php echo $row['email']; ?></p>

                </div>
                <div class="col-lg-4">
                    <h5>Date of Issue & Invoice ID</h5>
                    <hr>
                    <p class="txt1"><?php echo $row['issue_date']; ?></p>
                    <p class="txt1">#SMM-<?php echo $row['in_id']; ?></p>
                </div>
                <div class="col-lg-4">
                    <h5>Invoice Total</h5>
                    <hr>
                    <?php

                    $sql2 = "SELECT * FROM `payment_details` WHERE `email`='$cusmail'";

                    $result1 = mysqli_query($conn, $sql2);

                    while ($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                        <p class="total"><?php echo $row1['updated_price'] + 3 ?> <span style="font-size: 40px;">৳</span><br /></p>
                </div>
                <div class="divider"></div>

                <div class="row">
                    <div class="col-lg-4">
                        <h5>Item Name</h5>
                        <p class="txt1"><?php echo $row['product_name']; ?></p>
                    </div>
                    <div class="col-lg-4">
                        <h5>Bkash Charge</h5>
                        <p class="txt1">3 <span style="font-size: 18px;font-weight:bold">৳</span></p>
                    </div>
                    <div class="col-lg-4">
                        <h5>Amount</h5>
                        <p class="txt1"><?php echo $row1['updated_price']; ?> <span style="font-size: 18px;">৳</span></p>
                    </div>
                </div>

                <h6>Date of Product Delivary</h6>
                <hr>
                <p class="txt1">
                    <?php
                        $delivary = $row['delivary'];
                        $payment =  $row['payment'];
                        if ($payment == 'Paid') {
                            echo $delivary;
                    ?>


                <h2 class="pu">Paid</h2>

            <?php
                        } else if ($payment == 'Cash on Delivery') {
            ?>

                <h2 class="pu2">Cash on Delivery</h2>

            <?php
                            echo $delivary;
                        } else {

            ?>
                <h2 class="pu1">Unpaid</h2>
                <p class="txt1">You didn't paid. Follow the instruction again.</p>
                <i style="color: red;">Any serious issue about payment. Call Now: <b> +8801611xxxxx</b></i>
            <?php
                        }
            ?>
            </p>


        <?php
                    }
        ?>
            </div>

        </div>
    </div>
    <div class="download">
        <input class="download btn btn-primary" type="button" onclick="printDiv('printableArea')" value="Download this Page" />
    </div>
    <?php include('../footer.php'); ?>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>


<?php
}
?>

<style>
    .logo1 {
        font-size: 50px;
        font-weight: 900;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: green;
        padding: 20px;
        color: wheat;
    }

    .divider {
        border-bottom: 5px solid red;
        margin-bottom: 15px;
    }

    .download {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    .txt1 {
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }

    .total {
        font-size: 50px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: green;
    }

    .pu {
        color: green;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 150px;
        position: absolute;
        opacity: 0.4;
        display: flex;
        justify-content: center;
        transform: rotate(-45deg);
        margin-top: 70px;
    }

    .pu1 {
        color: red;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 120px;
        position: absolute;
        opacity: 0.4;
        display: flex;
        justify-content: center;
        transform: rotate(-45deg);
        margin-top: 70px;
    }

    .pu2 {
        color: red;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 50px;
        position: absolute;
        opacity: 0.4;
        display: flex;
        justify-content: center;
        transform: rotate(-45deg);
        margin-top: 120px;
    }
</style>