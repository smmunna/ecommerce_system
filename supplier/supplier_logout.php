<?php
include('connection.php');
session_start();

session_destroy();
header("Location: http://localhost/All_Code/ecommerce_system/supplier/supplier_login.php");
