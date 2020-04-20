<?php
include 'DbConfig.php';
mysqli_select_db($conn,$dbName);
if(isset($_POST['submit'])){
    $chatTxt = $_POST['messageTxt'];
    $fromUser = $_COOKIE['email'];
    $pOfUser = $_GET['test'];
    $getUserId = "select user_id from products where p_id ='$pOfUser'";
    $qResult = mysqli_query($conn,$getUserId);
    $toUser = mysqli_fetch_row($qResult)[0];
    $qInsert = "insert into chat_message(to_user_id,from_user_id,chat_message) values ('$toUser','$fromUser','$chatTxt')";
    mysqli_query($conn,$qInsert);
    header("location:../MyMassages.php");

}