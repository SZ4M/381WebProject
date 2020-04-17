
<?php
include 'DbConfig.php';


mysqli_select_db($conn,$dbName);

$name= $_POST['NAME'];
$email= $_POST['EMAIL'];
$password= $_POST['PASSWORD'];

$selected = "select * from usertable where email = '$email'" ;

$Result = mysqli_query($conn,$selected);

$counter = mysqli_num_rows($Result) ;

if($counter==1){

    header('location:../registration.php');
}

else{
    $cc = "insert into usertable(email,name,password) values ('$email','$name','$password')";
    mysqli_query($conn,$cc) ;
    header('location:../login.php');
}



?>
