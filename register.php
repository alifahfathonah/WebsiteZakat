<!DOCTYPE html>

<?php $con = mysqli_connect("localhost","root","","db_zakat"); ?>

<html lang="en">
  <head>
    <title>Zakat Yuk! | Detail Masjid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-lg-5">
	      <a class="navbar-brand" href="index.html">Zakat Yuk!</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="masjiddanzakat.html" class="nav-link">Masjid dan Zakat</a></li>
            <li class="nav-item active"><a href="registrasi.html" class="nav-link">Registrasi</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">Registrasi</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="register.html">Register</a></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
            <form method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">Nama</label>
                  <input type="text" name="customer_name" class="form-control" id="inputName" placeholder="Masukkan nama">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" name="customer_email" class="form-control" id="inputEmail4">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" name="customer_address" class="form-control" id="inputAlamat" placeholder="Masukkan alamat">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputKota">Kota</label>
                  <input type="text" name="customer_city" class="form-control" id="inputKota">
                </div>
              </div>
              <div class="form-group">
                <label for="inputTelepon">Nomor Telepon</label>
                <input type="text" name="customer_contact" class="form-control" id="inputTelepon">
              </div>
              <div class="form-group">
                <label for="inputMasjid">Pilih Masjid</label>
                <select name="customer_masjid" id="inputMasjid" class="form-control">
                  <option selected>Choose...</option>
                  <?php

                              $get_masjid = "SELECT * FROM product";
                              $run_masjid = mysqli_query($con,$get_masjid);

                              while ($row_masjid=mysqli_fetch_array($run_masjid)){

                                  $product_name = $row_masjid['product_name'];

                                  echo "

                                  <option value='$product_name'> $product_name </option>

                                  ";

                              }

                              ?>
                </select>
              </div>
              <button name="submit" type="submit" class="btn btn-primary">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </section>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

<?php

if(isset($_POST['submit'])){

    $c_name = $_POST['customer_name'];
    $c_email = $_POST['customer_email'];
    $c_address = $_POST['customer_address'];
    $c_city = $_POST['customer_city'];
    $c_contact = $_POST['customer_contact'];
    $c_masjid = $_POST['customer_masjid'];

    $insert_muzakki = "INSERT INTO customer (customer_name,customer_email,customer_address,customer_city,customer_contact,customer_masjid) VALUES
    ('$c_name','$c_email','$c_address','$c_city','$c_contact','$c_masjid')";
    $run_muzakki = mysqli_query($con,$insert_muzakki);

    if($run_muzakki){

        echo "<script>alert('Muzakki berhasil diinputkan')</script>";
        echo "<script>window.open('index.html','_self')</script>";

    } else {
      echo "<script>alert('Muzakki berhasil diinputkan')</script>";
    }

}


?>
