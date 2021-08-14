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
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-primary height=">
        <div class="container-fluid justify-content-center ">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="<?= base_url('home'); ?>">
                <img src="<?= base_url(); ?>assets/img/jatisaba-1.png" alt="" class="logo-light" height="45" />
            </a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero section Start -->
    <section class="hero-section bg-dark " id="home">
        <div class="dash">
            <div style=" background-image: linear-gradient(-360deg,rgba(0, 0, 0, 0.562) 40%, rgba(255, 255, 255, 0.76));">
                <div class="container-fluid">
                    <div class="row">
                        <div class="account-pages pt-5 my-5">
                            <div class="container">

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-md-5">
                                                <img src="assets/images/small/img-5.jpg" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body py-2">
                                                    <h5 class="card-title">Kepala Desa</h5>
                                                    <p class="card-text">This is a wider card with supporting text lead-in to additional content.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="text-center mt-4">
                                <a href="<?= base_url('home'); ?>" class="btn btn-primary">Kembali <i class="mdi mdi-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end -->
        </div>
        <!-- end row -->
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
</body>

</html>