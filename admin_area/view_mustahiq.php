<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->

                <i class="fa fa-dashboard"></i> Dashboard / View Mustahiq

            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->

                   <i class="fa fa-tags"></i>  View Mustahiq

               </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->

                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No </th>
                                <th> Nama </th>
                                <th> No. KTP </th>
                                <th> Jenis Kelamin </th>
                                <th> Alamat </th>
                                <th> Masjid </th>
                                <th> Kontak </th>
                                <th> Status </th>
                                <th> Jumlah Anak </th>
                                <th> Delete </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->

                        <tbody><!-- tbody begin -->

                            <?php

                                $i=0;

                                $get_users = "SELECT * FROM admins";
                                $run_users = mysqli_query($con,$get_users);

                                while($row_users=mysqli_fetch_array($run_users)){

                                    $user_id = $row_users['admin_id'];
                                    $user_name = $row_users['admin_name'];
                                    $user_number = $row_users['admin_number'];
                                    $user_gender = $row_users['admin_gender'];
                                    $user_address = $row_users['admin_address'];
                                    $user_masjid = $row_users['admin_masjid'];
                                    $user_contact = $row_users['admin_contact'];
                                    $user_status = $row_users['admin_status'];
                                    $user_child = $row_users['admin_child'];

                                    $i++;

                            ?>

                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $user_name; ?> </td>
                                <td> <?php echo $user_number; ?> </td>
                                <td> <?php echo $user_gender; ?> </td>
                                <td> <?php echo $user_address; ?></td>
                                <td> <?php echo $user_masjid; ?></td>
                                <td> <?php echo $user_contact ?> </td>
                                <td> <?php echo $user_status ?> </td>
                                <td> <?php echo $user_child ?> </td>
                                <td>

                                     <a href="index.php?delete_user=<?php echo $user_id; ?>">

                                        <i class="fa fa-trash-o"></i> Delete

                                     </a>

                                </td>
                            </tr><!-- tr finish -->

                            <?php } ?>

                        </tbody><!-- tbody finish -->

                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>
