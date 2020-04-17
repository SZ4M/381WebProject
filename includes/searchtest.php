<?php
include 'DbConfig.php';

mysqli_select_db($conn, $dbName);
$searchinput = $_POST['searchinput'];
$searchquery=
    "SELECT * FROM products WHERE p_name = '$searchinput' ";
$result= mysqli_query($conn,$searchquery);

