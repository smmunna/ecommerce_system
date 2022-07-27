<?php include('../header.php');
    include('../connection.php');
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer | Login</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <!-- Creating form for customer log in -->
    <div class="container">
        <h2 class="txt">Customer Login Pannel</h2>
        <hr>
        <div class="sec">
            <hr>
            <form action="http://localhost/All_Code/ecommerce_system/customer/2customerlogincode.php" method="post">
                <label for="">Username:</label>
                <input type="text" name="customer_email" class="form-control" placeholder="Enter your mail" required>
                <label for="">Password:</label>
                <input type="password" name="customer_password" class="form-control" placeholder="password" required> <br>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="http://localhost/All_Code/ecommerce_system/customer/2customersignup.php" class="btn btn-danger" style="float: right;">Sign Up</a> <br><br>

            </form>
        </div>
        <p style="text-align: center;color:red">Attention ! <i>If you forgot your password ,
                you can recover through your mail. Click on the bellow button for recovery. If you can remember your email.</i></p>
        <div class="sec2">

            <a href="http://localhost/All_Code/ecommerce_system/customer/2customer_recoverypass.php" class="btn btn-success">Recover Password</a>

        </div>
        <br><br>
    </div>

    <?php include('../footer.php')  ?>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

    <style>
        h2.txt {
            margin-top: 75px;
            text-align: center;
        }

        .sec {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            bottom: 10px;
        }

        .sec2 {
            display: flex;
            justify-content: center;
        }
    </style>