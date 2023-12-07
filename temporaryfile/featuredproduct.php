<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
include('connection.php') ?>

<h2 style="text-align: center; margin-top:20px">Featured Product</h2>
<hr>

<div class="container">


    <!-- Fetching the data from the database -->
    <div class="row">


        <?php

        // FOR getting the page number from the URL
        global $get_page;
        if (isset($_GET['page'])) {
            $get_page = $_GET['page'];
        }
        if ($get_page == "" || $get_page == "1") {
            $target_page = 1;
        } else {
            $target_page = $_GET['page'];
        }

        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($target_page - 1) * 12;


        $sql = "SELECT * FROM `products` ORDER BY product_id DESC LIMIT $page_first_result,12";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $myimage = $row['image'];
        ?>
            <!-- Put all the values here from the database -->


            <div class="card" style="width: 18rem;margin: 20px;">
                <?php
                echo "<img src ='images/$myimage'>";
                ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                    <p class="card-text">Price: <span style="font-size: 25px;font-weight:bold">৳</span><?php echo $row['price']; ?></p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
    <div style="display: flex;justify-content:center;">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>

                <?php
                // For pagination -->
                $sql1 = "SELECT * FROM `products`";
                $result1 = mysqli_query($conn, $sql1);
                $count = mysqli_num_rows($result1);
                $i = ($count / 12);
                $page = ceil($i);

                for ($target = 1; $target <= $page; $target++) {
                ?>

                    <li class="page-item"><a class="page-link" href="featuredproduct.php?page=<?php echo $target; ?>"><?php echo $target; ?></a></li>

                <?php
                }

                ?>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>