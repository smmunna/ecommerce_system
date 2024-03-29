<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<!-- Starting of the Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">DRAGON</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item withdrop">
          <a class="nav-link" href="#">Admin Pannel</a>
          <ul class="dropdown-content">
            <li><a href="../1admindashboard.php">Dashboard</a></li>
            <li><a href="../1adminlogin.php">Login</a></li>
            <li><a href="../1adminlogout.php">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item withdrop">
          <a class="nav-link" href="#">Customer Pannel</a>
          <ul class="dropdown-content">
            <li><a href="../2customerdashboard.php">Dashboard</a></li>
            <li><a href="../2customerlogin.php">Login</a></li>
            <li><a href="../2customerlogout.php">Logout</a></li>
          </ul>
        </li>
        <!-- For Customer Dropdown Menu.. -->
        <li class="nav-item">
          <a class="nav-link" href="../shopnow.php">Shop Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supplier Panel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Styling of Header -->
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