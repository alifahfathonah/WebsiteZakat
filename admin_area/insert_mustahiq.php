<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <ol class="breadcrumb"><!-- breadcrumb Begin -->

            <li class="active"><!-- active Begin -->

                <i class="fa fa-dashboard"></i> Dashboard / Insert Mustahiq

            </li><!-- active Finish -->

        </ol><!-- breadcrumb Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <div class="panel panel-default"><!-- panel panel-default Begin -->

           <div class="panel-heading"><!-- panel-heading Begin -->

               <h3 class="panel-title"><!-- panel-title Begin -->

                   <i class="fa fa-money fa-fw"></i> Insert Mustahiq

               </h3><!-- panel-title Finish -->

           </div> <!-- panel-heading Finish -->

           <div class="panel-body"><!-- panel-body Begin -->

               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Nama Mustahiq </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="admin_name" type="text" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> No. KTP </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="admin_number" type="text" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Jenis Kelamin </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="admin_gender" type="text" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Alamat </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="admin_address" type="text" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Kontak </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="admin_contact" type="text" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Masjid </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="admin_masjid" type="text" class="form-control" required>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Status </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <textarea name="admin_status" class="form-control" rows="3"></textarea>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"> Jumlah Anak </label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <textarea name="admin_child" class="form-control" rows="3"></textarea>

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->

                      <label class="col-md-3 control-label"></label>

                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="submit" value="Insert User" type="submit" class="btn btn-primary form-control">

                      </div><!-- col-md-6 Finish -->

                   </div><!-- form-group Finish -->

               </form><!-- form-horizontal Finish -->

           </div><!-- panel-body Finish -->

        </div><!-- canel panel-default Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->


<?php

if(isset($_POST['submit'])){

    $user_name = $_POST['admin_name'];
    $user_number = $_POST['admin_number'];
    $user_gender = $_POST['admin_gender'];
    $user_address = $_POST['admin_address'];
    $user_contact = $_POST['admin_contact'];
    $user_masjid = $_POST['admin_masjid'];
    $user_status = $_POST['admin_status'];
    $user_child = $_POST['admin_child'];

    $insert_user = "INSERT INTO admins (admin_name,admin_number,admin_gender,admin_address,admin_contact,admin_masjid,admin_status,admin_child) VALUES ('$user_name','$user_number','$user_gender','$user_address','$user_contact','$user_masjid','$user_status','$user_child')";
    $run_user = mysqli_query($con,$insert_user);

    if($run_user){

        echo "<script>alert('Mustahiq berhasil diinputkan')</script>";
        echo "<script>window.open('index.php?view_mustahiq','_self')</script>";

    }

}

?>


<?php } ?>
