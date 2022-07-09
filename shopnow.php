<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your | Shop</title>
    <link rel="icon" href="webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    include('connection.php');
    include('header.php');
    ?>
    <div class="container">

        <h2 style="text-align: center; padding-top:90px">All Product List</h2>
        
        <form action="" method="post" name="myForm" onsubmit="return validateForm()" autocomplete="off">
            <input type="text" name="search_name" placeholder="Search by Product Name" >
            <button type="submit" >Search</button><i id="search_name" style="color: red;font-size:16px;font-weight:bold; padding-left:10px;"></i>
        </form>
        <hr>
        <!-- Fetching the data from the database -->
        <div class="row">


            <?php
            //For Searching-->
            if (isset($_POST['search_name'])) {
                $recv =  $_POST['search_name'];
            }
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

            global $recv;
            $sql = "SELECT * FROM `products` WHERE `product_name` LIKE '%$recv%' ORDER BY product_id DESC LIMIT $page_first_result,12";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $myimage = $row['image'];

            ?>
                <!-- Put all the values here from the database -->
                <div class="card" style="width: 18rem;margin: 20px;">
                    <?php
                    echo "<img src ='images/$myimage' height=200 width=200>";
                    ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                        <p class="card-text">Price: <span style="font-size: 25px;font-weight:bold">৳</span><?php echo $row['price']; ?></p>
                        <a href="productdetails.php?id=<?php echo $row['product_id']; ?>" class="btn btn-primary">Buy Now</a>
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

                        <li class="page-item"><a class="page-link" href="shopnow.php?page=<?php echo $target; ?>"><?php echo $target; ?></a></li>

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
    <?php include('footer.php') ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<!-- Script for form validation of Product search box -->
<script>
   function validateForm() {
  let x = document.forms["myForm"]["search_name"].value;
  if (x == "") {
    document.getElementById("search_name").innerHTML = "Product Name must be filled out!!"
    return false;
  }
}
</script>