<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('../header.php');
    include('../connection.php');
    ?>
    <!-- Creating form for admin log in -->
    <div class="container">
        <h2 class="txt">Admin Login Pannel</h2>
        <hr>
        <div class="sec">
            <hr>
            <form action="http://localhost/All_Code/ecommerce_system/admin/1adminlogincode.php" method="post" autocomplete="off">
                <label for="">Username:</label>
                <input type="text" name="username" class="form-control" required> <br>
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control" required> <br>
                <button type="submit" class="btn btn-primary">Submit</button> <br><br>
            </form>
        </div>
    </div>

    <?php include('../footer.php')  ?>
    <!-- <script src="js/bootstrap.min.js"></script>
</body>

</html> -->

    <style>
        h2.txt {
            margin-top: 75px;
            text-align: center;
        }

        .sec {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>