<?php
include 'DbConfig.php';

mysqli_select_db($conn,$dbName);

$userID=$_COOKIE['userEmail'];
$p_name =$_POST['Name'];
$p_Title=$_POST['ProductTitle'];
$p_Category=$_POST['p_Category'];
$p_Desc=$_POST['Description'];
$p_Img=$_POST['Img'];

$insertQuery=
    "insert into products(user_id,p_name,p_Category,p_description,p_img) 
values('$userID','$p_name','$p_Category','$p_Desc','$p_Img')";

    mysqli_query($conn,$insertQuery);
    header('location: ../successProduct.php');
?>