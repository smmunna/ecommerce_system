<title>Invoice | Admin</title>
<link rel="icon" href="../webimage/shopicon.png" type="image/png">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
include('../connection.php');
session_start();
if (empty($_SESSION['username'])) {
    header("Location: 1adminlogin.php");
}
?>

<?php
include('../header.php');
$order_id =  $_REQUEST['order_id'];
$sql = "SELECT * FROM `payment_details` WHERE `order_id`='$order_id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>

    <!-- ========================================================================= -->
    <div class="sec1" style="display: flex; justify-content:center;">
        <div class="myform">
            <fieldset>

                <hr>
                <form action="" method="post">

                    <input type="text" class="form-control" name="order_id" hidden value="<?php echo $row['order_id']; ?>" required>

                    <input type="text" class="form-control" name="name" hidden value="<?php echo $row['name']; ?>" required>

                    <input type="text" class="form-control" hidden name="email" value="<?php echo $row['email']; ?>" required>

                    <!-- new added -->
                    <input type="text" class="form-control" hidden name="address" value="<?php echo $row['address']; ?>" required>

                    <input type="text" class="form-control" hidden name="supplier_id" value="<?php echo $row['supplier_id']; ?>" required>

                    <input type="text" class="form-control" name="phone" hidden value="<?php echo $row['phone']; ?>" required>
                    <label for="" class="form-label">Payment is Successful or Not ?</label>
                    <select name="payment" class="form-select" aria-label="Default select example" id="">
                        <option selected>Choose Payment</option>
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                        <option value="Cash on Delivery">Cash on Delivery</option>
                    </select>

                    <input type="text" class="form-control" name="quantity" hidden value="<?php echo $row['quantity']; ?>" required>

                    <input type="text" class="form-control" name="product_id" hidden value="<?php echo $row['product_id']; ?>" required>

                    <input type="text" class="form-control" name="product_name" hidden value="<?php echo $row['product_name']; ?>" required>

                    <input type="text" class="form-control" name="payment_number" hidden value="<?php echo $row['payment_number']; ?>" required>

                    <input type="text" class="form-control" name="transaction_id" hidden value="<?php echo $row['transaction_id']; ?>" required>
                    <br>
                    <label for="delivary">Delivary Date:</label>
                    <input type="date" id="delivary" name="delivary" required><br><br>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Sent Invoice</button>
                    <a href="1admindashboard.php" class="btn btn-success" style="float: right;margin-left:15px;">Back to Dashboard</a>
                </form>
            </fieldset>
        </div>
    </div>

<?php
}
?>

<style>
    .myform {
        padding-top: 80px;
    }
</style>


<?php

if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $payment = $_POST['payment'];
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    $supplier_id = $_POST['supplier_id'];
    $product_name = $_POST['product_name'];
    $payment_number = $_POST['payment_number'];
    $transaction_id = $_POST['transaction_id'];
    $delivary = date("Y-m-d", strtotime($_POST['delivary']));

    $sql1 = "INSERT INTO `invoice_details`(`order_id`, `name`, `email`,`address`, `payment`, `quantity`, `product_id`,`supplier_id`, `product_name`, `payment_number`, `transaction_id`, `delivary`) 
    VALUES ('$order_id','$name','$email','$address','$payment','$quantity','$product_id','$supplier_id','$product_name','$payment_number','$transaction_id','$delivary')";

    $result = mysqli_query($conn, $sql1);
    if ($result) {
        echo '<script>alert("Invoice Sent Successfully");</script>';
    } else {
        echo 'Something went wrong....';
    }
}

?>