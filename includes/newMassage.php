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

}elseif (isset($_POST['submit2'])){

    $chatTxt = $_POST['messageTxt'];

    $fromUser = $_COOKIE['email'];

    $toID=$_POST['toID'];
    $getUserId2 = "select email from usertable where email LIKE '%$toID%' ";
    $qResult2= mysqli_query($conn,$getUserId2);
    $toUser2 = mysqli_fetch_row($qResult2)[0];


    $qInsert2 = "insert into chat_message(to_user_id,from_user_id,chat_message) values ('$toUser2','$fromUser','$chatTxt')";
    mysqli_query($conn,$qInsert2);

    header("location:../index.php?test=hello");




}