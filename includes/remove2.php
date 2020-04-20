<?php
session_start();
include 'DbConfig.php';
mysqli_select_db($conn,$dbName);
$removed=$_SESSION['REMOVE'];

mysqli_query($conn,"DELETE FROM products WHERE p_id = '$removed'  ");




header("location:../UserPage.php");

?>