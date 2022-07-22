<?php
include('../connection.php');
session_start();
if (empty($_SESSION['customer_email'])) {
    header("Location:http://localhost/All_Code/ecommerce_system/customer/2customerlogin.php");
}
$recv = $_REQUEST['id'];
$sql = "SELECT * FROM `products` WHERE `product_id`='$recv'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {

    $instock = $row['instock'];
?>
    <?php
    if ($instock <= 0) {
        echo '<script>alert("Product is Out of the Stock, You can not buy, try another one.");</script>';
        header('refresh:0; url=http://localhost/All_Code/ecommerce_system/shopnow.php');
    } else {
    ?>


        <?php
        $recv = $_REQUEST['id'];
        $sql = "SELECT * FROM `products` WHERE `product_id`='$recv'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['id'] = $recv;
        ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product | Checkout</title>
                <link rel="icon" href="../webimage/shopicon.png" type="image/png">
                <link rel="stylesheet" href="../css/bootstrap.min.css">
            </head>

            <body>
                <?php
                include('../header.php'); ?>
                <section id="sec1">
                    <div class="container">
                        <h2 style="text-align: center;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;padding-top:60px;">Checkout</h2>
                        <hr>
                        <form action="http://localhost/All_Code/ecommerce_system/cart/3cartcode.php" method="post">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h4>Fill-Up this Form Properly with Correct Information</h4>
                                    <hr>
                                    <label for="" class="form-label">Name:</label>
                                    <input type="text" class="form-control w-100" name="name" placeholder="Enter your Name" required>
                                    <label for="" class="form-label">Email:</label>
                                    <input type="email" class="form-control w-100" name="email" placeholder="Enter your Mail" required>
                                    <label for="" class="form-label">Phone:</label>
                                    <input type="number" class="form-control w-100" name="phone" placeholder="Enter your phone Number" required>
                                    <label for="" class="form-label">Delivary Address:</label>
                                    <input type="text" class="form-control w-100" name="address" placeholder="House No,Post Office,Village,Thana,District,Division" required>
                                    <label for="" class="form-label">Quantity: </label>


                                    <select id="list" name="quantity" class="form-select w-100" aria-label="Default select example">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                    </select>

                                    <label for="" class="form-label">Payment Option: </label>
                                    <select id="list" name="payment_option" class="form-select w-100" aria-label="Default select example">
                                        <option>Choose one</option>
                                        <option value="Bkash">Bkash</option>
                                        <option value="Nagad">Nagad</option>
                                        <option value="Cash on delivary">Cash on delivary</option>
                                    </select>

                                    <!-- Hidden button -->
                                    <!-- product ID -->
                                    <input type="text" class="form-control w-50" hidden name="product_id" value="<?php echo $row['product_id']; ?>" placeholder="" required>
                                    <input type="text" class="form-control w-50" hidden name="supplier_id" value="<?php echo $row['supplier_id']; ?>" placeholder="" required>
                                    <input type="text" class="form-control w-50" hidden name="price" value="<?php echo $row['price'] + 3; ?>" placeholder="" required>
                                    <input type="text" class="form-control w-50" hidden name="product_name" value="<?php echo $row['product_name']; ?>" placeholder="" required>
                                    <input type="text" class="form-control w-50" hidden name="instock" value="<?php $instock = $row['instock'];
                                                                                                                echo $instock; ?>" placeholder="" required>

                                </div>
                                <div class="col-lg-5">
                                    <h4>Payment Procedure-Checkout</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h3>Your Order</h3>
                                            <table class="table">
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Sub-Total</th>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 17px;"><?php echo $row['product_name']; ?></td>
                                                    <td><?php echo $row['price']; ?><span style="font-size: 25px;font-weight:bold">৳</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 17px;">Sub Total</td>
                                                    <td><?php echo $row['price']; ?><span style="font-size: 25px;font-weight:bold">৳</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 17px;">Bkash Charge</td>
                                                    <td><?php $bkash_charge = 3;
                                                        echo $bkash_charge; ?><span style="font-size: 25px;font-weight:bold">৳</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 17px;">Total</td>
                                                    <td id="tt"><?php echo $bkash_charge + $row['price']; ?><span style="font-size: 25px;font-weight:bold">৳</span></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn1" style="margin-top: 14px;">Update Transaction</button> <br><br>
                        </form>
                    </div>
                </section>
                <script src="../js/bootstrap.min.js"></script>
            </body>

            </html>

        <?php
        }
        include('../footer.php');
        ?>

        <style>
            .btn1 {
                margin-left: 40%;
                width: 20%;
            }
        </style>
    <?php
    }
    ?>
<?php
}
?>