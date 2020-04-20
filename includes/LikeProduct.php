<?php
session_start();
include 'DbConfig.php';
mysqli_select_db($conn, $dbName);
$testing= $_SESSION['HELP'];
$U_ID=$_SESSION['HELP2'];

$insertQuery3 = "insert into likedproducts(User_ID,Product_ID) values('$U_ID','$testing')";
if(isset($_POST['butt']))
mysqli_query($conn,$insertQuery3);


header("location:../product-page.php?test=$testing");




?>



