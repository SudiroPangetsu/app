<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Coderthemes" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/banyumas.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landing/css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/landing/css/materialdesignicons.min.css" />

    <!-- owl carousel css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/landing/css/owl.theme.default.min.css">

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/landing/css/style.min.css" />

</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark bg-dark">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="<?= base_url('home'); ?>">
                <img src="<?= base_url(); ?>assets/img/jatisaba-1.png" alt="" class="logo-light p-1" height="50" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contak" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero section Start -->
    <section class="hero-section" style="background-image: url(assets/img/bg/1.jpg); height:500px; background-size: cover;" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-wrapper pt-5 pb-3">
                        <h1 class="text-white text-uppercase" style="font-size: 2em;">Selamat Datang</h1>
                        <p class="text-white" style="font-size: 1.5em;">Di Informasi Bidang Tanah <strong class="text-uppercase">Desa Jatisaba</strong> </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="present-mockup">
                            <div class="row">
                                <div class="col-lg-6 col-xl-8">
                                    <div class="card-box">
                                        <h4 class="header-title mb-3">Statistik Blok</h4>
                                        <canvas id="myChart" width="400" height="209"></canvas>
                                    </div>
                                </div><!-- end col-->

                                <div class="col-lg-6 col-xl-4">
                                    <div class="card-box">
                                        <h4 class="header-title mb-3">Statistik Kluster</h4>

                                        <canvas id="donat" width="400" height="200"></canvas>

                                        <div class="text-center">
                                            <ul class="list-inline chart-detail-list mb-0 mt-2">
                                                <li class="list-inline-item">
                                                    <h6 class="text-info"><i class="mdi mdi-circle-outline mr-1"></i>Total kluster : <?= $k1 + $k2 + $k3 + $k4; ?>
                                                    </h6>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div><!-- end col-->
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- Hero section Start -->
    <section class="section mt-3">

    </section>

    <!-- aparatur desa -->
    <section class="section mt-5" id="features">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class=" mb-5">
                                <h3 class="title">Sejarah Desa Jatisaba</h3>
                                <p class="text-muted"> Di dalam sebuah kisah yang sudah masyhur di tengah masyarakat diriwayatkan bahwa awal mula dibukanya desa Jatisaba adalah berkat kegigihan seorang prajurit Mataram bernama Raden Jati Anom alias Mbah Semutirta ketika mendapat perintah dari rajanya, Sultan Agung Hanyakrakusuma yang bernama asli Raden Mas Jatmika alias Raden Mas Rangsang, alias Prabu Pandita Sultan Agung Hanyakrakusuma atau yang bergelar Sutan Agung Senopati Ing Ngalaga Ngabdurrahman Sayyidin Panatagama, yaitu putra dari Prabu Hanyakrawati alias Mas Jolang alias Pangeran Seda Krapyak (Raja Mataram II) yang menggantikan ayahandanya Sultan Sutawijaya (Raja Mataram I) dengan Ratu Mas Adi Dyah Banawati putri dari Pangeran Benowo (Sultan Pajang II), yaitu perintah untuk membuka desa-desa baru terkait dengan rencana beliau yang akan melakukan suatu penyerangan besar-besaran terhadap benteng VOC Belanda di Batavia (Jayakarta).... <a href="<?= base_url('home/sejarah'); ?>" class="">Baca<i class=" mdi mdi-arrow-right ml-2"></i></a></p>
                            </div>
                        </div>


                        <!-- end row -->

                        <div class="col-lg-6">
                            <!-- START carousel-->
                            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExample" data-slide-to="1"></li>
                                    <li data-target="#carouselExample" data-slide-to="2"></li>
                                    <li data-target="#carouselExample" data-slide-to="3"></li>
                                    <li data-target="#carouselExample" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="<?php base_url() ?>assets/img/bg/2.jpg" alt="First slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="<?php base_url() ?>assets/img/bg/3.jpg" alt="Second slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="<?php base_url() ?>assets/img/bg/4.jpg" alt="Third slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="<?php base_url() ?>assets/img/bg/5.jpg" alt="Third slide" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="<?php base_url() ?>assets/img/bg/6.jpg" alt="Third slide" />
                                    </div>
                                </div>
                            </div>
                            <!-- END carousel-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- End Testimonials section -->



    <!-- Footer start -->
    <footer class="section bg-pattern footer pt-5" id="contak">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div>
                        <div class="mb-3">
                            <img src="<?= base_url(); ?>assets/img/jatisaba-1.png" alt="" height="20">
                        </div>
                        <p class="pt-1 text-white-50">Website ini di buat untuk :</p>
                        <p class="text-white-50">memberikan informasi kepada warga desa jatisaba, khususnya mengenai informasi desa. Seperti profil desa, kegiatan desa, Dll. </p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="mt-3 mt-sm-0">
                        <h5 class="footer-title text-white font-16 mb-3">About</h5>
                        <ul class="list-unstyled footer-list">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#features">features</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="mt-3 mt-sm-0">
                        <h5 class="footer-title text-white font-16 mb-3">Contact</h5>
                        <div>
                            <p class="text-white-50 mb-2"><i class="mdi mdi-map-marker-outline text-white font-18 mr-2 align-middle"></i> Jl. Raya Jatisaba KM.07 Kode Pos. 53162</p>
                            <p class="text-white-50 mb-2"><i class="mdi mdi-phone text-white font-18 mr-2 align-middle"></i>(0281) 6517 481</p>
                            <p class="text-white-50"><i class="mdi mdi-email-outline text-white font-18 mr-2 align-middle"></i> Jatisaba_cilongok.net</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </footer>

    <div class="footer-alt py-3 bg-dark">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="text-white-50 mb-md-0"><?= date('Y'); ?> Jatisaba</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer end -->

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <!-- Javascript -->
    <script src="<?= base_url(); ?>assets/landing/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/landing/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/landing/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/landing/js/scrollspy.min.js"></script>

    <!-- owl-carousel -->
    <script src="<?= base_url(); ?>assets/landing/js/owl.carousel.min.js"></script>

    <!-- custom js -->
    <script src="<?= base_url(); ?>assets/landing/js/app.js"></script>

    <script src="<?= base_url(); ?>assets/js/chartjs.js"></script>
    <script>
        var ctx = document.getElementById('donat').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['K1', 'K2', 'K3', 'K4'],
                datasets: [{
                    label: 'kluster',
                    data: [
                        <?= $k1; ?>,
                        <?= $k2; ?>,
                        <?= $k3; ?>,
                        <?= $k4; ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
    </script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    'Blok 1', 'Blok 2', 'Blok 3', 'Blok 4', 'Blok 5', 'Blok 6', 'Blok 7', 'Blok 8', 'Blok 9', 'Blok 10',
                    'Blok 11', 'Blok 12', 'Blok 13', 'Blok 14', 'Blok 15', 'Blok 16', 'Blok 17', 'Blok 18', 'Blok 19', 'Blok 10',
                    'Blok 21', 'Blok 22', 'Blok 23', 'Blok 24', 'Blok 25', 'Blok 26', 'Blok 27', 'Blok 28', 'Blok 29', 'Blok 20',
                    'Blok 31', 'Blok 32', 'Blok 33', 'Blok 34', 'Blok 35', 'Blok 36', 'Blok 37', 'Blok 38', 'Blok 39', 'Blok 40',
                    'Blok 41', 'Blok 42', 'Blok 43', 'Blok 44', 'Blok 45', 'Blok 46', 'Blok 47', 'Blok 48', 'Blok 49', 'Blok 50', '0'
                ],
                datasets: [{
                    label: 'Perblok',
                    data: [

                        <?= $blok1; ?>, <?= $blok2; ?>, <?= $blok3; ?>, <?= $blok4; ?>, <?= $blok5; ?>, <?= $blok6; ?>, <?= $blok7; ?>, <?= $blok8; ?>, <?= $blok9; ?>, <?= $blok10; ?>,
                        <?= $blok11; ?>, <?= $blok12; ?>, <?= $blok13; ?>, <?= $blok14; ?>, <?= $blok15; ?>, <?= $blok16; ?>, <?= $blok17; ?>, <?= $blok18; ?>, <?= $blok19; ?>, <?= $blok20; ?>,
                        <?= $blok21; ?>, <?= $blok22; ?>, <?= $blok23; ?>, <?= $blok24; ?>, <?= $blok25; ?>, <?= $blok26; ?>, <?= $blok27; ?>, <?= $blok28; ?>, <?= $blok29; ?>, <?= $blok30; ?>,
                        <?= $blok31; ?>, <?= $blok32; ?>, <?= $blok33; ?>, <?= $blok34; ?>, <?= $blok35; ?>, <?= $blok36; ?>, <?= $blok37; ?>, <?= $blok38; ?>, <?= $blok39; ?>, <?= $blok40; ?>,
                        <?= $blok41; ?>, <?= $blok42; ?>, <?= $blok43; ?>, <?= $blok44; ?>, <?= $blok45; ?>, <?= $blok46; ?>, <?= $blok47; ?>, <?= $blok48; ?>, <?= $blok49; ?>, <?= $blok50; ?>, 0
                    ],
                    backgroundColor: [
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>