<!DOCTYPE html>

<?php $con = mysqli_connect("localhost","root","","db_zakat"); ?>

<?php

$get_pro = "SELECT * FROM product WHERE product_id = '15'";
$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

    $pro_name = $row_pro['product_name'];
    $pro_img_1 = $row_pro['product_img_1'];
    $pro_img_2 = $row_pro['product_img_2'];
    $pro_img_3 = $row_pro['product_img_3'];
    $pro_img_4 = $row_pro['product_img_4'];
    $pro_desc = $row_pro['product_desc'];

 ?>

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
            <li class="nav-item active"><a href="masjiddanzakat.html" class="nav-link">Masjid dan Zakat</a></li>
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
            <h2 class="mb-3 bread">Detail Masjid</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="masjiddanzakat.html">Masjid dan Zakat <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail Masjid <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
            <center>
            <h2 class="mb-3 pb-10"><?php echo $pro_name; ?></h2>
            <img src="admin_area/product_images/<?php echo $pro_img_1; ?>" alt="" class="img-fluid">
            </center>
            <br>
            <p><?php echo $pro_desc; ?></p>

            <div class="card-group">
              <div class="card">
                <img src="admin_area/product_images/<?php echo $pro_img_2; ?>" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Kegiatan 1</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="card">
                <img src="admin_area/product_images/<?php echo $pro_img_3; ?>" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Kegiatan 2</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <div class="card">
                <img src="admin_area/product_images/<?php echo $pro_img_4; ?>" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Kegiatan 3</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section ftco-no-pt pb-5">
      <div class="container-fluid px-0">
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <div class="row">
							<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <div class="text d-block pl-md-4">
		                <h3 class="heading"><a href="#">Daftar Muzakki</a></h3>
		                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                <p><a href="detailmuzakki.php" class="btn btn-primary py-2 px-3">Lihat Detail</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <div class="text d-block pl-md-4">
		                <h3 class="heading"><a href="#">Daftar Mustahiq</a></h3>
		                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                <p><a href="detailmustahiq.php" class="btn btn-primary py-2 px-3">Lihat Detail</a></p>
		              </div>
		            </div>
		          </div>
            </div>
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Zakat Yuk!</h2>
              <p>"Tidaklah akan berkurang harta yang kita infaq/sedekahkan dengan ikhlas karena Allah, melainkan Allah akan menggantinya dengan berlipat ganda."</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Masjid dan Zakat</a></li>
                <li><a href="#" class="py-2 d-block">Privacy</a></li>
                <li><a href="#" class="py-2 d-block">Terms Condition</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Masjid dan Zakat</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

<?php } ?>

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
