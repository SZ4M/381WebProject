<?php


if (!isset($_COOKIE['vaa']))
    header('location:Login.php?error=Please login ');
include 'includes/DbConfig.php';
mysqli_select_db($conn,$dbName);
$userEmail = $_COOKIE['email'];
$qUser = "select name from usertable where email = '$userEmail';";
$result= mysqli_query($conn,$qUser);
$userName = mysqli_fetch_assoc($result)['name'];



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="AddProduct.php">Add New Products</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">My Massages</h2>
                </div>
                <form>
                    <div>
                        <ul class="nav nav-tabs">
                            <?php
                            $currentUser = $_COOKIE['email'];
                            $qFromUser= "SELECT DISTINCT from_user_id from chat_message where to_user_id='$currentUser'";


                            ?>





                            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">User2</a></li>







                            <li class="nav-item"><a class="nav-link" active role="tab" data-toggle="tab" href="#tab-2">User3</a></li>
                            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">User4</a></li>
                        </ul>
                        <div class="tab-content">



                            <div class="tab-pane active" role="tabpanel" id="tab-1">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <td>CurrentUser1 :</td>
                                            </tr>
                                            <tr>
                                                <td>User2 :</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>





                            <div class="tab-pane" role="tabpanel" id="tab-2">
                                <p>Content for tab 2.</p>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="tab-3">
                                <p>Content for tab 3.</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label>Message</label><textarea class="form-control"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="registration.html">Sign up</a></li>
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