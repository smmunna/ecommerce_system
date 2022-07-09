<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Supplier login form Responsive Widget Template : W3Layouts</title>

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

        <h2 style="margin-top:40px;">Supplier Login Form</h2>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2>Login</h2>
                    <form action="http://localhost/All_Code/ecommerce_system/supplier/supplier_logincode.php" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" placeholder="Username or Email" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
                    <p class="continue"><span>or Login with</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="fab fa-facebook-f" aria-hidden="true"></span>

                            </div>
                        </a>
                        <a href="#twitter">
                            <div class="twitter">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fab fa-google" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div>
                    <p class="account">Don't have an account? <a href="#signup">Sign up</a></p>
                </div>
            </div>
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p>&copy; 2022 Supplier login form. All Rights Reserved | Ecommerce System</p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="../css/supplier_css/js/fontawesome.js"></script>

</body>
</html>

