
<?php





$aa= mysqli_connect('localhost','root','');

mysqli_select_db($aa,'rregestration');


$email= $_POST['EMAIL'];
$password= $_POST['PASSWORD'];

$selected = "select * from usertable where email = '$email' && password ='$password' " ;

$Result = mysqli_query($aa,$selected);

$counter = mysqli_num_rows($Result) ;

if($counter==1){

    setcookie('vaa','yes',time()+(3600*3),'/');


    header('location:UserPage.php');
}

else{

    header('location:login.php');
}



?>
