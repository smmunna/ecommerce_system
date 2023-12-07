<?php
require_once('config.php');
$url = $_ENV['BASE_URL'];
$brandName = $_ENV['BRAND_NAME'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    .navbar-nav {
      margin-left: auto;
    }

    .dropdown-content {
      padding: 10px;
      background-color: whitesmoke;
      display: none;
    }

    .dropdown-content li {
      list-style: none;
      padding: 10px;
      border-bottom: 3px solid red;
    }

    .dropdown-content li a {
      text-decoration: none;
      color: black;
    }

    .withdrop:hover .dropdown-content {
      position: absolute;
      display: block;
    }

    .withdrop .dropdown-content li:hover {
      background-color: gainsboro;
      width: 100%;
    }

    .withdrop .dropdown-content li a:hover {
      color: blue;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark px-4 py-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo $url; ?>/index.php"><?php echo $brandName; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" id="menucicon" onclick="hidebtn()"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo $url; ?>/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $url; ?>/shopnow.php">Shop Now</a>
          </li>
          <li class="nav-item withdrop" id="dropadmin">
            <a class="nav-link" href="#">Admin</a>
            <ul class="dropdown-content">
              <li><a href="<?php echo $url; ?>/admin/1admindashboard.php">Dashboard</a></li>
              <li><a href="<?php echo $url; ?>/admin/1adminlogin.php">Login</a></li>
              <li><a href="<?php echo $url; ?>/admin/1adminlogout.php">Logout</a></li>
            </ul>
          </li>
          <li class="nav-item withdrop">
            <a class="nav-link" href="#">Customer</a>
            <ul class="dropdown-content">
              <li><a href="<?php echo $url; ?>/customer/2customerdashboard.php">Dashboard</a></li>
              <li><a href="<?php echo $url; ?>/customer/2customerlogin.php">Login</a></li>
              <li><a href="<?php echo $url; ?>/customer/2customerlogout.php">Logout</a></li>
            </ul>
          </li>



          <li class="nav-item withdrop">
            <a class="nav-link" href="#">Supplier Panel</a>
            <ul class="dropdown-content">
              <li><a href="<?php echo $url; ?>/supplier/supplier_dashboard.php">Dashboard</a></li>
              <li><a href="<?php echo $url; ?>/supplier/supplier_login.php">Login</a></li>
              <li><a href="<?php echo $url; ?>/supplier/supplier_logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <script>
    function hidebtn() {
      const navItem = document.getElementById('navbarNav')
      if (navItem.style.display === 'none' || navItem.style.display === '') {
        navItem.style.display = 'block';
      } else {
        navItem.style.display = 'none';
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>