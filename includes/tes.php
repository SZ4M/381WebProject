<?php
ob_start();
include 'DbConfig.php';

?>





<html>
<head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">

</head>
<body>

<?php
/*//require_once 'header.php';
*/?>


<?php

if(isset($_GET['Pro_id']))
{
    $id=$_GET['Pro_id'];

    if(isset($_POST['submit']))
    {
        $prdouctName=$_POST['p_name'];

        $cato=$_POST['p_Category'];

        $desc=$_POST['p_description'];
        $image=$_POST['p_img'];


       /* $query3=mysqli_query("update products set p_name='$prdouctName', p_Category='$cato' , p_description='$desc' , p_img='$image' ");
        if($query3)
        {

            header("Location:http://localhost/dash/blood.php");
            ob_end_flush();
            die();

        }*/
    }
    $query1=mysqli_query("select * from  products where p_id='$id'");
    $query2=mysqli_fetch_array($query1);
    ?>
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>

        </div>
        <div>
            <form action="includes/newEdit.php" method="post" enctype="multipart/form-data">
                <div class="form-group"><label>Product Name</label><input class="form-control" type="text" name="Name" value="<?php echo $query2['p_name']; ?>></div>
                <div class="form-group"><label>Product Category</label><input class="form-control" type="text" name="p_Category"value="<?php echo $query2['p_Category']; ?>></div>
                <div class="form-group"><label>Description</label><textarea class="form-control" name="Description" value="<?php echo $query2['p_description']; ?>></textarea></div>
                <div class="form-group"><label>Product Images</label><input type="file" name="file"value="<?php echo $query2['p_img']; ?>></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Send</button></div>
            </form>
        </div>

        <div></div>
    </div>
    <?php
}
?>
</body>
</html>