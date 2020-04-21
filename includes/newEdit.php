<?php
include 'DbConfig.php';

mysqli_select_db($conn,$dbName);
session_start();
$userID=$_COOKIE['email'];
$p_name =$_POST['Name'];
$p_Title=$_POST['ProductTitle'];
$p_Category=$_POST['p_Category'];
$p_Desc=$_POST['Description'];
$p_ID=$_SESSION['EDIT'];

$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$FileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png');
$fileNameNew='';
if(in_array($fileActualExt,$allowed)){
    if($fileError==0){
        if (filesize()<5000000){
            $fileNameNew = uniqid('',true).".".$fileActualExt;
            $fileDestination = '../uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination);

        }else{
            echo "Your file is too big!";
        }
    }else{
        echo "There was an error uploading your file!";
    }

}else{
    echo "You cannot upload files of this type";

}



/*"insert into products(user_id,p_name,p_Category,p_description,p_img) */

$UpdateQuery= "update products set p_name='".$p_name."', p_Category='".$p_Category."' , p_description='".$p_Desc."' , p_img='".$fileNameNew."' where p_id = '".$p_ID."' ";


mysqli_query($conn,$UpdateQuery);
header('location: ../successProduct.php');
//upload img to server


?>
