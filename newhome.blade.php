@extends('frontend.master')

@section('isi')
    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                        <div class="banner_content">
                            <h3>Sihelti</h3>
                            <p>Aplikasi Sihelti melibatkan dua sisi user, yaitu pasien dan dokter. Aplikasi ini memudahkan dokter untuk mendiagnosis
                            penyakit pasien dan juga mengatur antrian untuk konsultasi pasien. Pasien juga dapat menggunakan aplikasi ini untuk mencari
                            rumah sakit yang tepat untuk penyakit yang diderita</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Service  Area =================-->
    <section class="service-area area-padding">
        <div class="container">
            <div class="row">
                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-plus-square"></i>
                        </div>
                        <div class="service-content">
                            <h5>Insert</h5>
                            <p>Menambahkan pasien rumah sakit dengan deskripsi-deskripsi dibutuhkan agar dokter/suster dapat melihat datanya</p>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="service-content">
                            <h5>Update</h5>
                            <p>Mengupdate status pasien sesuai dengan antrian jika sedang dalam progress dan sudah selesai</p>
                        </div>
                    </div>
                </div>


                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-sign-out"></i>
                        </div>
                        <div class="service-content">
                            <h5>Delete</h5>
                            <p>Menghapus antrian pasien jika pasien sudah masuk ke dalam ruangan dokter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Service Area end =================-->


    <!--================About  Area =================-->
    <section class="about-area area-padding-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="area-heading">
                        <h4>Two perspective,<br>Patient dan Doctor </h4>
                        <h6>Salah satu aplikasi yang membantu dalam konsultasi kesehatan </h6>

                        <p>Melibatkan dua sisi user, yaitu pasien dan dokter. Aplikasi ini memudahkan dokter dalam mendiagnosa penyakit yang diderita pasien. Aplikasi ini juga memudahkan user mencari rumah sakit yang cocok dengan penyakit yang diderita</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>Patients Perspective</h5>
                                    <p>Memudahkan user mencari rumah sakit yang cocok dengan penyakit yang diderita</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>Doctor Perspective</h5>
                                    <p>Memudahkan dokter dalam mendiagnosa penyakit yang diderita pasien dan mengatur antrian untuk konsultasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->


@endsection
