<?php include('connection.php');
$sql = "SELECT * FROM `products`";
$result = mysqli_query($conn, $sql);
?>


<link rel="stylesheet" href="bootstrap.min.css">

<div class="container">
    <div class="row">

        <div class="col-lg-12">



            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">

                    <?php

                    $i = 0;
                    foreach ($result as $row) {
                        $actives = '';
                        if ($i == 0) {
                            $actives = 'active';
                        }

                    ?>


                        <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></button>
                    <?php
                        $i++;
                    }
                    ?>



                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">

                    <?php

                    $i = 0;
                    foreach ($result as $row) {
                        $myimage = $row['image'];
                        $actives = '';
                        if ($i == 0) {
                            $actives = 'active';
                        }

                    ?>


                        <div class="carousel-item <?= $actives; ?>">
                            <div class="img-fluid">
                                <img src="<?php echo 'images/' . $myimage; ?>" class="img-fluid" alt="" srcset="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="background-color: black;"><?php echo $row['product_name']; ?></h5>

                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

    </div>
</div>

<script src="js/bootstrap.min.js"></script>