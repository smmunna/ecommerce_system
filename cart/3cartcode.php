<title>Update | Cart</title>
<link rel="icon" href="../webimage/shopicon.png" type="image/png">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
include('../header.php');
include('../connection.php');
session_start();
$recv = $_SESSION['id'];

if (isset($_POST['name']) && isset($_POST['product_id'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    $supplier_id = $_POST['supplier_id'];
    $product_name = $_POST['product_name'];
    $instock = $_POST['instock'];
    $price = $_POST['price'];
    // $bkashnum = $_POST['bkashnum'];
    // $transaction_id = $_POST['transaction_id'];
    $payment_option = $_POST['payment_option'];

    $updated_price = $quantity * $price;

    //For Bkash============================>
    if ($payment_option == "Bkash") {
?>


        <section id="sec1" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p id="demo" style="text-align: justify;">
                            Please complete your bKash payment at first,
                            then fill up the form below. Also note that 1.85% bKash
                            "SEND MONEY" cost will be added with net price.
                            Total amount you need to send us <b><?php echo $updated_price; ?><span style="font-size: 18px;font-weight:bold"> ৳</span> </b> at<br>

                            bKash Personal Number : <b style="color:red;">01611765966</b>
                        </p>
                        <hr>
                        <form action="http://localhost/All_Code/ecommerce_system/cart/3cart_update.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="" class="form-control" hidden value="<?php echo $name; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="email" id="" class="form-control" hidden value="<?php echo $email; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="phone" id="" class="form-control" hidden value="<?php echo $phone; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="address" id="" class="form-control" hidden value="<?php echo $address; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="quantity" id="" class="form-control" hidden value="<?php echo $quantity; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="instock" id="" class="form-control" hidden value="<?php echo $instock; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="product_id" id="" class="form-control" hidden value="<?php echo $product_id; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="supplier_id" id="" class="form-control" hidden value="<?php echo $supplier_id; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="product_name" id="" class="form-control" hidden value="<?php echo $product_name; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="updated_price" id="" class="form-control" hidden value="<?php echo $updated_price; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="payment_option" id="" class="form-control" hidden value="<?php echo $payment_option; ?>" placeholder="" aria-describedby="helpId">

                                <label for="" style="margin: 0 0px 10px 0;">Bkash Number:</label> <br>
                                <input type="text" name="payment_number" id="" class="form-control" placeholder="016XXXXXXXX" aria-describedby="helpId" required>
                                <label for="" style="margin: 0 0px 10px 0;">Transaction Id:</label>
                                <br><input type="text" name="transaction_id" id="" class="form-control" placeholder="8NF5HDER59L" aria-describedby="helpId" required>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Make Payment</button>
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <p><img src="../webimage/bkash.png" class="img-fluid" height="350" width="350" alt="" srcset="" style="margin-top: 40px;padding:20px;"></p>
                    </div>
                </div>
            </div>
        </section>

        <?php include('../footer.php') ?>







        <!-- For Nagad Payment Option -->
    <?php
    } elseif ($payment_option == "Nagad") {
    ?>


        <section id="sec1" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p id="demo" style="text-align: justify;">
                            Please complete your Nagad payment at first,
                            then fill up the form below. Also note that 1.85% Nagad
                            "SEND MONEY" cost will be added with net price.
                            Total amount you need to send us <b><?php echo $updated_price; ?><span style="font-size: 18px;font-weight:bold"> ৳</span> </b> at<br>

                            Nagad Personal Number : <b style="color:red;">01611765966</b>
                        </p>
                        <hr>
                        <form action="3cart_update.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="" class="form-control" hidden value="<?php echo $name; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="email" id="" class="form-control" hidden value="<?php echo $email; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="phone" id="" class="form-control" hidden value="<?php echo $phone; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="address" id="" class="form-control" hidden value="<?php echo $address; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="quantity" id="" class="form-control" hidden value="<?php echo $quantity; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="instock" id="" class="form-control" hidden value="<?php echo $instock; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="product_id" id="" class="form-control" hidden value="<?php echo $product_id; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="product_name" id="" class="form-control" hidden value="<?php echo $product_name; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="updated_price" id="" class="form-control" hidden value="<?php echo $updated_price; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="payment_option" id="" class="form-control" hidden value="<?php echo $payment_option; ?>" placeholder="" aria-describedby="helpId">

                                <label for="" style="margin: 0 0px 10px 0;">Nagad Number:</label> <br>
                                <input type="text" name="payment_number" id="" class="form-control" placeholder="016XXXXXXXX" aria-describedby="helpId" required>
                                <label for="" style="margin: 0 0px 10px 0;">Transaction Id:</label>
                                <br><input type="text" name="transaction_id" id="" class="form-control" placeholder="8NF5HDER59L" aria-describedby="helpId" required>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Make Payment</button>
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <p><img src="../webimage/nagad.png" class="img-fluid" height="350" width="350" alt="" srcset="" style="margin-top: 40px;padding:20px;"></p>
                    </div>
                </div>
            </div>
        </section>









    <?php
    }

    // For cash on delivery

    elseif ($payment_option == "Cash on delivary") {
    ?>



        <section id="sec1" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2>Total Amount: <?php echo $updated_price; ?> Taka</h2>
                        <hr>
                        <p>You selected Cash on delivery. So, Confirm it and check your invoice.We'll give you the product delivery date there. Thank you.</p>
                        <form action="3cart_update.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="" class="form-control" hidden value="<?php echo $name; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="email" id="" class="form-control" hidden value="<?php echo $email; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="phone" id="" class="form-control" hidden value="<?php echo $phone; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="address" id="" class="form-control" hidden value="<?php echo $address; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="quantity" id="" class="form-control" hidden value="<?php echo $quantity; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="instock" id="" class="form-control" hidden value="<?php echo $instock; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="product_id" id="" class="form-control" hidden value="<?php echo $product_id; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="product_name" id="" class="form-control" hidden value="<?php echo $product_name; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="updated_price" id="" class="form-control" hidden value="<?php echo $updated_price; ?>" placeholder="" aria-describedby="helpId">
                                <input type="text" name="payment_option" id="" class="form-control" hidden value="<?php echo $payment_option; ?>" placeholder="" aria-describedby="helpId">


                                <input type="text" name="payment_number" id="" value="0000" hidden class="form-control" placeholder="016XXXXXXXX" aria-describedby="helpId" required>

                                <br><input type="text" name="transaction_id" hidden value="0000" id="" class="form-control" placeholder="8NF5HDER59L" aria-describedby="helpId" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Confirm It</button>
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <p><img src="../webimage/cashondelivery.jpg" class="img-fluid" height="350" width="350" alt="" srcset="" style="margin-top: 40px;padding:20px;border-radius:250px;"></p>
                    </div>
                </div>
            </div>
        </section>



<?php
    }

}

?>

<script src="../js/bootstrap.min.js"></script>