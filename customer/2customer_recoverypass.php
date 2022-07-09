<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer | Password Recovery</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="sec1" style="display: flex; justify-content:center;">
        <div class="myform">
            <fieldset>
                <legend style="font-weight:700;">Recover Your Password</legend>
                <hr>
                <form action="" method="post">
                    <label for="" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your Email" id="" required> <br>
                    <button type="submit" class="btn btn-primary">Recover</button>
                    <a href="http://localhost/All_Code/ecommerce_system/customer/2customerlogin.php" class="btn btn-danger" style="float: right;">Back to Login</a>
                </form>
            </fieldset>
        </div>
    </div>

    <?php include('../header.php');
    include('../connection.php');
    // For Recoverring::::::
    if (isset($_POST['email'])) {
        $to_email = $_POST['email'];

        $sql = "SELECT * FROM `customers` WHERE `customer_email`='$to_email'";
        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pass_rec = $row['customer_password'];
    ?>

                <p class="txt1"><?php echo 'Your recovered Password is:  <b style="color:red;">' . $pass_rec . '</b>';  ?></p>
            <?php
            }
            ?>
    <?php
        } else {
            echo 'No data found here..';
        }
    }
    ?>
    <hr>
    <?php include('../footer.php')  ?>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

<!-- For Styling.. -->
<style>
    .myform {
        padding-top: 80px;
    }

    .txt1 {
        padding-top: 15px;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        display: flex;
        justify-content: center;

    }
</style>