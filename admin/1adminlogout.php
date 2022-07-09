<?php
include('../connection.php');
session_start();

session_destroy();
header("Location: http://localhost/All_Code/ecommerce_system/admin/1adminlogin.php");
