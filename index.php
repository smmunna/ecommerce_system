<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | DRAGON</title>
    <link rel="icon" href="webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <?php include 'header.php';  ?>
    <section id="sbg">
        <div class="container">
            <h1 class="h11">Welcome to this shop!</h1>
            <h4 class="h12">Buy your product from here..</h4> <br><br>
            <a href="shopnow.php" class="btn btn-primary alink1">Shop Now</a>
            <a href="#" class="btn btn-light alink2">Find More..</a>
        </div>
        <!-- 2nd Section -->
        <section id="sbg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="txt1">Our Products Category</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="http://localhost/All_Code/ecommerce_system/product_category/mobile_accesories.php" class="txt2">
                            <p>Mobile Accesories</p>
                        </a>
                        <a href="http://localhost/All_Code/ecommerce_system/product_category/computer_accesories.php" class="txt2">
                            <p>Computer Accesories</p>
                        </a>
                        <a href="http://localhost/All_Code/ecommerce_system/product_category/watch_category.php" class="txt2">
                            <p>Watch</p>
                        </a>
                        <a href="http://localhost/All_Code/ecommerce_system/product_category/television_category.php" class="txt2">
                            <p>Television</p>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="http://localhost/All_Code/ecommerce_system/product_category/tshirt_category.php" class="txt2">
                            <p>T-Shirts</p>
                        </a>
                        <a href="#" class="txt2">
                            <p onclick="noproduct()">Salwar-Kameez</p>
                        </a>
                        <a href="http://localhost/All_Code/ecommerce_system/product_category/sharee_category.php" class="txt2">
                            <p>Sharee</p>
                        </a>
                        <a href="#" class="txt2">
                            <p onclick="noproduct()">Polo Shirts</p>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="txt2">
                            <p onclick="noproduct()">Kitchen & Dining</p>
                        </a>
                        <a href="#" class="txt2">
                            <p onclick="noproduct()">Smart watch</p>
                        </a>
                        <a href="#" class="txt2">
                            <p onclick="noproduct()">Household</p>
                        </a>
                        <a href="#" class="txt2">
                            <p onclick="noproduct()">Medicine & Health Care</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- 3rd Section -->
        <section id="sbg3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="txt1 htofm" style="color: #C25207;">How to order from MyShop</p>
                        <hr>
                    </div>
                </div>
                <!-- Carosouel making for How to Plscr an order in the Shop -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="webimage/placeorder1.PNG" class="d-block w-100" alt="Place Order Process">
                        </div>
                        <div class="carousel-item">
                            <img src="webimage/placeorder2.PNG" class="d-block w-100" alt="Place Order Process">
                        </div>
                        <div class="carousel-item">
                            <img src="webimage/placeorder3.PNG" class="d-block w-100" alt="Place Order Process">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- 4th Section -->
        <section id="sbg4">
            <?php include 'featuredproduct2.php'; ?>
        </section>
        <!-- 5th Section -->
        <section id="sbg5">
            <?php include('footer.php'); ?>
        </section>
    </section>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<!-- For styling the index.php file.. -->
<style>
    #sbg {
        height: 100vh;
        background-image: url('webimage/bg2.jpg');
        background-size: cover;
    }

    .h11 {
        padding: 50px;
        font-size: 50px;
        padding-top: 100px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 900;
    }

    .h12 {
        font-size: 24px;
        color: white;
        padding-left: 50px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    a.btn.btn-primary.alink1 {
        margin-left: 52px;
        margin-right: 10px;
    }

    #sbg2 {
        margin-top: 250px;
        height: 400px;
        background-color: #FDF5DF;
    }

    .txt1 {
        display: flex;
        justify-content: center;
        padding-top: 30px;
        color: #5EBEC4;
        font-size: 40px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .txt2 {
        text-decoration: none;
        font-size: 20px;
        color: black;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .txt2:hover {
        text-decoration: underline;
        color: orangered;
    }

    /* Section 3 */
    #sbg3 {
        height: 575px;
        background-color: #e6dccb;
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='red' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='red' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel .carousel-indicators li.active {
        background-color: blue;
    }

    /* section 4 */
    #sbg4 {
        height: 600px;
        background-color: #dcb4c4;
    }

    #sbg5 {
        height: 500px;
        /* background-color: #3c247c; */
    }

    /* For Responsive View */
    @media (max-width: 1199.98px) {
        #sbg3 {
            height: 450px;
        }

        #sbg4 {
            height: 520px;
        }
    }

    /* For Tablet */
    @media (max-width: 991.98px) {
        #sbg2 {
            height: 700px;
        }

        #sbg3 {
            height: 400px;
        }

        #sbg4 {
            height: 500px;
        }
    }

    /* For LandScape */
    @media (max-width: 767.98px) {
        #sbg2 {
            height: 700px;
        }

        #sbg3 {
            height: 350px;
        }

        #sbg4 {
            height: 500px;
        }
    }

    /* For Potrait Mode of Phone */
    @media (max-width: 575.98px) {
        #sbg2 {
            height: 750px;
        }

        #sbg3 {
            height: 330px;
        }

        #sbg4 {
            height: 720px;
        }

        .htofm {
            font-size: 25px;
        }
    }

    /* For iPhone 6,7,8 */
    @media (max-width:414px) {
        #sbg2 {
            height: 750px;
        }

        #sbg3 {
            height: 250px;
        }

        #sbg4 {
            height: 720px;
        }

        .htofm {
            font-size: 25px;
        }
    }
</style>


<!-- No product alert -->
<script>
    function noproduct() {
        confirm("No product added to this category.!!!");
    }
</script>