<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Masjid </title>
</head>
<body>

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <ol class="breadcrumb"><!-- breadcrumb Begin -->

            <li class="active"><!-- active Begin -->

                <i class="fa fa-dashboard"></i> Dashboard / Insert Masjid

            </li><!-- active Finish -->

        </ol><!-- breadcrumb Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <div class="panel panel-default"><!-- panel panel-default Begin -->

           <div class="panel-heading"><!-- panel-heading Begin -->

               <h3 class="panel-title"><!-- panel-title Begin -->

                   <i class="fa fa-money fa-fw"></i> Insert Product

               </h3><!-- panel-title Finish -->

           </div> <!-- panel-heading Finish -->

           <div class="panel-body"><!-- panel-body Begin -->

               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Nama Masjid </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="product_name" type="text" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Foto Masjid </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="product_img_1" type="file" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Foto Kegiatan 1 </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="product_img_2" type="file" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Foto Kegiatan 2 </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="product_img_3" type="file" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Foto Kegiatan 3 </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="product_img_4" type="file" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Deskripsi Masjid </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"></label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="submit" value="Insert Masjid" type="submit" class="btn btn-primary form-control">

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

               </form><!-- form-horizontal Finish -->

           </div><!-- panel-body Finish -->

        </div><!-- canel panel-default Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];

    $product_img_1 = $_FILES['product_img_1']['name'];
    $product_img_2 = $_FILES['product_img_2']['name'];
    $product_img_3 = $_FILES['product_img_3']['name'];
    $product_img_4 = $_FILES['product_img_4']['name'];

    $temp_name_1 = $_FILES['product_img_1']['tmp_name'];
    $temp_name_2 = $_FILES['product_img_2']['tmp_name'];
    $temp_name_3 = $_FILES['product_img_3']['tmp_name'];
    $temp_name_4 = $_FILES['product_img_4']['tmp_name'];

    move_uploaded_file($temp_name_1,"product_images/$product_img_1");
    move_uploaded_file($temp_name_2,"product_images/$product_img_2");
    move_uploaded_file($temp_name_3,"product_images/$product_img_3");
    move_uploaded_file($temp_name_4,"product_images/$product_img_4");


    $insert_product = "INSERT INTO product
    (product_name,product_img_1,product_img_2,product_img_3,product_img_4,product_desc) VALUES
    ('$product_name','$product_img_1','$product_img_2','$product_img_3','$product_img_4','$product_desc')";

    $run_product = mysqli_query($con,$insert_product);

    if($run_product) {

      echo "<script>alert('Product has been inserted sucessfully')</script>";
      echo "<script>window.open(''index.php?view_masjid','_self'')</script>";

    }
}

?>

<?php } ?>
