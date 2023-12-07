<?php
include('../connection.php');
session_start();

session_destroy();
header("Location: 1adminlogin.php");
