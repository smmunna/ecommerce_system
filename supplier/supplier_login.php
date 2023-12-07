<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Supplier login</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="../css/supplier_css/css/style.css" type="text/css" media="all" />
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php include('../header.php') ?>
    <div class="signinform">

        <h2 style="margin-top:70px; text-align:center;">Supplier Login Form</h2>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2>Login</h2>
                    <form action="supplier_logincode.php" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" placeholder="Username or Email" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" placeholder="Password" required="">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- fontawesome v5-->
    <script src="../css/supplier_css/js/fontawesome.js"></script>

</body>

</html>