<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer | Signup</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php include('../header.php');
    include('../connection.php');
    ?>
    <!-- Starting the form for sumbitting the data -->
    <!-- ========================================================================= -->
    <div class="sec1" style="display: flex; justify-content:center;">
        <div class="myform">
            <fieldset>
                <legend style="font-weight:700;">Customer Sign-Up Form</legend>
                <hr>
                <form action="http://localhost/All_Code/ecommerce_system/customer/2customersignupcode.php" method="post">
                    <label for="" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="customer_name" id="" required>
                    <label for="" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="customer_email" id="" required>
                    <label for="" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="customer_password" id="" required>

                    <label for="" class="form-label">Phone:</label>
                    <input type="number" class="form-control" name="customer_phone" id="" required>
                    <label for="" class="form-label">City:</label>
                    <input type="text" class="form-control" name="city" id="" required>
                    <label for="" class="form-label">Postal Code:</label>
                    <input type="text" class="form-control" name="postal_code" id="" required>
                    <label for="" class="form-label">Country:</label>
                    <input type="text" class="form-control" name="country" required> <br>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <a href="http://localhost/All_Code/ecommerce_system/customer/2customerlogin.php" class="btn btn-success" style="float: right;">Back to Login</a>
                </form>
            </fieldset>
        </div>
    </div>
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
</style>