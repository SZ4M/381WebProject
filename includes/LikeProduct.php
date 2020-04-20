<?php
include 'DbConfig.php';


$insertQuery = "insert into likedproducts(User_ID,Product_ID) values('$u_id','$pInput')";
if(isset($_POST['action']))
    if($_POST['action']=='yes')
        mysqli_query($conn,$insertQuery);




?>