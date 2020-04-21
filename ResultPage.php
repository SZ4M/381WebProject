
<?php



include 'includes/DbConfig.php';

mysqli_select_db($conn, $dbName);


?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Signup</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Catalog Page</h2>
                    <?php
                    if (!isset($_COOKIE['eaa'])){
                        echo " <h2 class=\"text-info\"><a href='login.php'>Please Login For More detailed Search</a></h2> ";
                    }
                    ?>
                    <p></p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">

                                    </div>

                                    <div class="filter-item">
                                    </div>
                                    <div class="filter-item">
                                    </div>
                                    <div class="filter-item">
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse"
                                    id="filters">
                                    <div class="filters">
                                        <div class="filter-item">
                                            <h3>Search<input class="border rounded" type="text" style="width: auto;margin: 0px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;height: 30px;margin-top: 10px;margin-right: 0px;margin-left: -2px;max-width: auto;"></h3>
                                        </div>
                                        <div class="filter-item">
                                            <h3>Categories</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Phones</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Laptops</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">PC</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Tablets</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>Brands</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Samsung</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Apple</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">HTC</label></div>
                                        </div>
                                        <div class="filter-item">
                                            <h3>OS</h3>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Android</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">iOS</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters">

                                    <?php
                                    if (!isset($_COOKIE['eaa'])){

                                        if (isset($_POST['searchSub'])) {
                                        $searchInput = $_POST['search'];
                                        $searchQuery =
                                            "SELECT * FROM products WHERE p_name LIKE '%$searchInput%' OR p_Category LIKE '%$searchInput%'
                                             OR p_description LIKE '%$searchInput%'   ";
                                        $result = mysqli_query($conn, $searchQuery);

                                        $queryResult = mysqli_num_rows($result);

                                        if ($queryResult > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "
                                         <div class=\"col-12 col-md-6 col-lg-4\">
                                        <div class=\"clean-product-item\">
                                            <div class=\"product-name\"><a href='product-page.php?test=" . $row['p_id'] . "'>" . $row['p_name'] . "</a></div>
                                            <div class=\"about\">
                                                
                                            </div>
                                        </div>
                                    </div>
                                                
                                                
                                                
                                                ";

                                            }

                                        } else {

                                            echo "    <h2 class=\"text-info\">NO RESULTS</h2>";

                                        }
                                    }

                                    }else {


                                        if (isset($_POST['searchSub'])) {
                                            $searchInput = $_POST['search'];
                                            $searchQuery =
                                                "SELECT * FROM products WHERE p_name LIKE '%$searchInput%' OR p_Category LIKE '%$searchInput%'
                                             OR p_description LIKE '%$searchInput%'   ";
                                            $result = mysqli_query($conn, $searchQuery);

                                            $queryResult = mysqli_num_rows($result);

                                            if ($queryResult > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "
                                         <div class=\"col-12 col-md-6 col-lg-4\">
                                        <div class=\"clean-product-item\">
                                            <div class=\"image\"><a href=\"#\"><img class=\"img-fluid d-block mx-auto\" src=\"uploads/" . $row['p_img'] . "\"></a></div>
                                            <div class=\"product-name\"><a href='product-page.php?test=" . $row['p_id'] . "'>" . $row['p_name'] . "</a></div>
                                            <div class=\"about\">
                                                
                                            </div>
                                        </div>
                                    </div>
                                                
                                                
                                                
                                                ";

                                                }

                                            } else {

                                                echo "    <h2 class=\"text-info\">NO RESULTS</h2>";

                                            }

                                        }
                                    }


                                    ?>



                                </div>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
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