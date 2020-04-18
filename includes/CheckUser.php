
<?php



include 'DbConfig.php';

//$aa= mysqli_connect('localhost','root','');

mysqli_select_db($conn,$dbName);


$email= $_POST['EMAIL'];
$password= $_POST['PASSWORD'];

$selected = "select * from usertable where email = '$email' && password ='$password' " ;

$Result = mysqli_query($conn,$selected);

$counter = mysqli_num_rows($Result) ;

if($counter==1){
    $_COOKIE['userEmail']= $email;
    setcookie('vaa','yes',time()+(3600*3),'/');
    setcookie('waa','yes',time()+(3600*3),'/');
    setcookie('saa','yes',time()+(3600*3),'/');
    setcookie('eaa','yes',time()+(3600*3),'/');

    header('location:../index.php');
}

else{

    header('location:../login.php');
}



?>
