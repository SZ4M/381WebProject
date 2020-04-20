<?php

include 'DbConfig.php';
mysqli_select_db($conn,$dbName);
if (isset($_POST['submit'])) {
    $pd = $_GET['p2delete'];

    $remove = " DELETE FROM products WHERE p_id= '$pd' ";

    if (mysqli_query($conn, $remove)) {

        header('AddProduct.php');
        echo "Record deleted successfully";
    }

    else {


        echo "Error deleting record: " . mysqli_error($conn);
    }
}














?>