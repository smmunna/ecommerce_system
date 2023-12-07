<?php
session_start();
require_once('../config.php');
$url = $_ENV['BASE_URL'];

$email = $_SESSION['email'];
if (empty($email)) {
    echo '<script>alert("Without Login you can not access it.!!");</script>';
    echo '<script>window.location.href="supplier_login.php";</script>';
}
?>
<title>Supply | Status</title>
<link rel="icon" href="../webimage/shopicon.png" type="image/png">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
include('../header.php');
include('../connection.php');

$recv = $_REQUEST['id'];
$sql = "SELECT * FROM `invoice_details` WHERE `order_id`='$recv'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
    <br><br><br>
    <div class="container">
        <form action="" method="post">
            <input type="text" hidden name="product_id" value="<?php echo $row['product_id']; ?>">
            <input type="text" hidden name="customer_name" value="<?php echo $row['name']; ?>">
            <input type="text" hidden name="order_id" value="<?php echo $row['order_id']; ?>">
            <input type="text" hidden name="delivary" value="<?php echo $row['delivary']; ?>">
        <?php
    }
        ?>

        <label for="">Supply Status: </label>
        <select name="supply_status" id="">
            <option value="Completed">Completed</option>
            <option value="Not Completed"> Not Complete</option>
        </select>
        <button type="submit" style="font-size: 13px;">Submit</button>
        </form>
    </div>

    <!-- Applying the supply status -->
    <?php
    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        $customer_name = $_POST['customer_name'];
        $order_id = $_POST['order_id'];
        $delivary = $_POST['delivary'];
        $supply_status = $_POST['supply_status'];

        $sql1 = "INSERT INTO `supply_info`(`product_id`, `order_id`, `customer_name`, `delivary`, `supply_status`) 
                 VALUES ('$product_id','$order_id','$customer_name','$delivary','$supply_status')";
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            // Delete from invoice details list
            $sql2 = "DELETE FROM `invoice_details` WHERE `order_id`='$recv'";
            $result2 = mysqli_query($conn, $sql2);

            echo '<script>alert("Product Supplied Successfully");</script>';
            echo '<script>window.location.href="http://localhost/All_Code/ecommerce_system/supplier/supplier_dashboard.php";</script>';
        } else {
            echo '<script>alert("Something wrong in the Query");</script>';
            echo '<script>window.location.href="http://localhost/All_Code/ecommerce_system/supplier/supplier_dashboard.php";</script>';
        }
    }

    ?>