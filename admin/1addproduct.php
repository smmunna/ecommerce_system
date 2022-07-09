<?php 
    include('../connection.php');
    session_start();
    if (empty($_SESSION['username'])) {
        header("Location: http://localhost/All_Code/ecommerce_system/admin/1adminlogin.php");
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Insert Product</title>
    <link rel="icon" href="../webimage/shopicon.png" type="image/png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php include('../header.php');
    ?>
    <!-- Starting the form for sumbitting the data -->
    <!-- ========================================================================= -->
    <div class="sec1" style="display: flex; justify-content:center;">
        <div class="myform">
            <fieldset>
                <legend style="font-weight:700;">Add Product with Details</legend>
                <hr>
                <form action=" http://localhost/All_Code/ecommerce_system/admin/1addproductcode.php" method="post" enctype="multipart/form-data">
                    <!-- <label for="" class="form-label">Product ID:</label>
                    <input type="text" class="form-control" name="product_id" id="" required> -->
                    <label for="" class="form-label">Product Name:</label>
                    <input type="text" class="form-control" name="product_name" id="" required>
                    <label for="" class="form-label">Supplier ID:</label>
                    <input type="text" class="form-control" name="supplier_id" id="" required>
                    <label for="" class="form-label">Select Catagory:</label>
                    <select name="categoryid" class="form-select" aria-label="Default select example" id="">
                        <option selected>Choose your category</option>
                        <option value="1">Mobile Accessories</option>
                        <option value="2">Computer Accessories</option>
                        <option value="3">Watch</option>
                        <option value="4">Television</option>
                        <option value="5">Smart Watch</option>
                        <option value="6">T-Shirt</option>
                        <option value="7">Sharee</option>
                        <option value="8">Kitchen</option>
                        <option value="9">House Hold</option>
                        <option value="10">Medicine & Health Care</option>
                    </select>
                    <label for="" class="form-label">In Stock:</label>
                    <input type="text" class="form-control" name="instock" id="" required>
                    <label for="" class="form-label">Unit:</label>
                    <input type="text" class="form-control" name="unit" id="" required>
                    <label for="" class="form-label">Price:</label>
                    <input type="text" class="form-control" name="price" id="" required>
                    <label for="" class="form-label">Product Photo:</label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="uploadfile" multiple id="" required> <br>

                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="http://localhost/All_Code/ecommerce_system/admin/1admindashboard.php" class="btn btn-success" style="float: right;">Back to Dashboard</a>
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