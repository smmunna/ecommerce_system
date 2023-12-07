<?php include('connection.php');
$sql = "SELECT * FROM `products`";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured | Product</title>
    <link rel="icon" href="webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">

</head>

<body>

    <div class="container">
        <p class="featuredpro">Featured Products</p>
        <hr>
        <div class="responsive">
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                $myimage = $data['image'];
            ?>
                <!-- Our code will be here -->
                <div class="carousel-item carousel">
                    <div class="img-fluid">
                        <img src="<?php echo 'images/' . $myimage; ?>" class="img-fluid w-100 p-4" alt="" srcset="" style="width: 300px; height: 300px;">
                        <h5 class="card-title text-center"><?php echo substr($data['product_name'], 0, 20); ?></h5>
                        <p class="card-text txt3 text-center">Price: <span style="font-size: 25px;font-weight:bold">৳</span><?php echo $data['price']; ?></p>
                        <div class="button">
                            <a href="productdetails.php?id=<?php echo $data['product_id']; ?>" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <!-- Arrow Prev Next -->
        <div class="arrow_prev" style="float: left;">
            <span><i class="fa-solid fa-circle-chevron-left"></i></i></span>
        </div>
        <div class="arrow_next" style="float: right;">
            <span> <i class="fa-solid fa-circle-chevron-right"></i></i></span>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <!-- Above the slick.. -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/slick.js"></script>
    <script>
        $('.responsive').slick({
            prevArrow: '.arrow_prev',
            nextArrow: '.arrow_next',
            arrows: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
</body>

</html>


<!-- Stling the Caroseul -->
<style>
    .carousel {
        display: flex;
        justify-content: center;
    }

    .featuredpro {
        font-size: 50px;
        text-align: center;
        font-weight: 600;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        padding: 5px;
    }

    .button {
        display: flex;
        justify-content: center;
    }

    .arrow_prev {
        position: absolute;
        top: 240%;
        left: 20px;
    }

    .arrow_next {
        position: absolute;
        top: 240%;
        right: 20px;
    }

    .arrow_prev span,
    .arrow_next span {
        font-size: 55px;
        color: red;
        display: block;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
    }

    /* For Responsive */
    /* Large Devices Desktops */
    @media (max-width: 1399.98px) {
        .arrow_prev {
            top: 270%;
        }

        .arrow_next {
            top: 270%;
        }
    }

    /* small desktop */
    @media (max-width: 1199.98px) {
        .arrow_prev {
            top: 249%;
        }

        .arrow_next {
            top: 249%;
        }
    }

    /* For Tablet */
    @media (max-width: 991.98px) {
        .arrow_prev {
            top: 285%;
        }

        .arrow_next {
            top: 285%;
        }
    }

    /* For Landscape */
    @media (max-width: 767.98px) {
        .arrow_prev {
            top: 285%;
        }

        .arrow_next {
            top: 285%;
        }
    }

    /* Phone */
    @media (max-width: 575.98px) {

        .arrow_prev {
            top: 295%;
        }

        .arrow_next {
            top: 295%;
        }
    }

    @media (max-width: 414.98px) {
        .arrow_prev {
            top: 285%;
        }

        .arrow_next {
            top: 285%;
        }
    }
</style>