
<?php
session_start();

if (!isset($_COOKIE['waa']))
    header('location:Login.php?error=Please login ');

include 'includes/DbConfig.php';

mysqli_select_db($conn, $dbName);
$u_id='';
$pInput='';
if (isset($_GET['test'])) {
    $pInput=$_GET['test'];
    $_SESSION['HELP']=$pInput;
    $pInputQuery="SELECT * FROM products WHERE p_id='$pInput' ";
    $result = mysqli_query($conn, $pInputQuery);


    $row=mysqli_fetch_assoc($result);
    $productName= "" . $row['p_name'] . "";
    $prodcutDesc="" . $row['p_description'] . "";
    $productImg ="".$row['p_img']."";
    $productCategory = "".$row['p_Category'];
    $u_id = $_COOKIE['email'];
    $_SESSION['HELP2']=$u_id;
  //  $pInput =$row['p_id'];

}


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="UserPage.php">Profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="AddProduct.php">Add New Product</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="includes/Logout.php.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Product Page</h2>
                </div>
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <?php

                                    echo"
                                    <div class='sp-wrap'><a href='uploads/$productImg'><img class='img-fluid d-block mx-auto' src='uploads/$productImg'></a><a href='uploads/$productImg'><img class='img-fluid d-block mx-auto' src='uploads/$productImg'></a></div>
                                </div>
                                ";?>
                            </div>
                            <div class="col-md-6">
                                <div class="info">

                            <?php
                                // Product Name
                                  echo "<h3> $productName </h3>";

                                    ?>
                                  



<!--                                    <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-half-empty.svg"><img src="assets/img/star-empty.svg"></div>-->
                               <div class="price">
<!--                                        <h3>$300.00</h3>-->
                                    </div>
                                    <form action="includes/LikeProduct.php" method="post" >
                                    <button class="btn btn-primary" type="submit" id="interestBtn" value="no" name="butt" ><i class="icon-heart" id="intrestIcon"
                                         ></i> Intersted </button>
                                    </form>

                                    <script>


                                        $(document).ready(function () {





                                        $("#interestBtn").click(function(){



                                            var ajaxurl = 'includes/LikeProduct.php';
                                                    data =  {'action': 'yes'};
                                            $.post(ajaxurl, data, function (response) {
                                                    // Response div goes here.
                                                    alert("action performed successfully");


                                                });
                                            $("#interestBtn").addClass("btn btn-danger");
                                            $("#intrestIcon").addClass("icon-minus");




                                            });




                                        });


                                    </script>
                                    <?php
                                    $likedQuery="SELECT User_ID FROM likedproducts WHERE Product_ID='$pInput' and User_ID ='$u_id' ";

                                    $tR= mysqli_query($conn,$likedQuery);


                                    $Zrow=mysqli_fetch_assoc($tR);
                                    $tRow=mysqli_num_rows($tR);

                                    if($tRow>0){

                                            echo"<a href='MyMassages.php' >you already showed intrest you can massage </a>
                                                    <form>
                                                    <textarea name
</form>
                                                            ";
                                        }else
                                            echo "please like to send a message";




                                    ?>

                                    <div class="summary">
                                        <?php
                                       echo "<p font-size='30px'> $productCategory </p>"
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div>
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Description</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane active fade show description" role="tabpanel" id="description">
                                    <?php
                                    echo "
                                  
                                    <p> $prodcutDesc </p>
                                    <div class='row'>
                                        " ?>

                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="registration.php">Sign up</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
