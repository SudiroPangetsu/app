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
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css" />

</head>

<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-primary bg-dark">
        <div class="container-fluid justify-content-center ">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="<?= base_url('home'); ?>">
                <img src="<?= base_url(); ?>assets/img/jatisaba-1.png" alt="" class="logo-light" height="45" />
            </a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero section Start -->
    <section class="hero-section bg-white " id="home">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h2 class="page-title"><?= $title; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-8">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Sales Statistics</h4>

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
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="text-center mt-4">
                        <a href="<?= base_url('home'); ?>" class="btn btn-primary">Kembali <i class="mdi mdi-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <?= $blok41; ?>, <?= $blok42; ?>, <?= $blok43; ?>, <?= $blok44; ?>, <?= $blok45; ?>, <?= $blok46; ?>, <?= $blok47; ?>, <?= $blok48; ?>, <?= $blok49; ?>, <?= $blok50; ?>, , 0
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
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