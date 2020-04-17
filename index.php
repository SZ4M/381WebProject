<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Brand</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Signup</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="UserPage.php">MyPage</a></li>

            </ul>
        </div>
    </div>
</nav>
<main class="page landing-page">
    <section class="clean-block clean-hero"
             style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
        <div class="text" id="homePageSearchSection">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                vitae leo.</p>
            <form action="includes/searchtest.php" method="post">
            <input type="search" class="bg-light border rounded border-white shadow" name="searchinput"
                                     style="width: 440px;height: 44px;margin: 50px;"
                                     placeholder="Enter The Product.." autocomplete="on" autofocus required/>

                <div class="form-group"><button class="btn btn-outline-light btn-lg" name="searchsub" type="submit">Search</button></div>

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