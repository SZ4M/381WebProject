
<?php



include 'DbConfig.php';

//$aa= mysqli_connect('localhost','root','');

mysqli_select_db($conn,$dbName);


$email= $_POST['EMAIL'];
$userID= $email;
$password= $_POST['PASSWORD'];

$selected = "select * from usertable where email = '$email' && password ='$password' " ;

$Result = mysqli_query($conn,$selected);

$counter = mysqli_num_rows($Result) ;
if($counter==1){

    setcookie('email',$userID,time()+(4400*4),'/');

    setcookie('vaa','yes',time()+(4400*4),'/');
    setcookie('waa','yes',time()+(4400*4),'/');
    setcookie('saa','yes',time()+(4400*4),'/');
    setcookie('eaa','yes',time()+(4400*4),'/');

    header('location:../UserPage.php');
}

else{

    setcookie('err',' Your email or password is incorrect ',time()+(4400*4),'/');

    header('location:../login.php');
}



?>
