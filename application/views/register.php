<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Uplon - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/banyumas.png">

    <!-- App css -->
    <link href="<?= base_url(); ?>assets/vertical/dist/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?= base_url(); ?>assets/vertical/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/vertical/dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body class="authentication-bg bg-white">

    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box">
                        <div class="card-box mb-0">
                            <div class="card-body p-4">

                                <div class="text-center">
                                    <div class="my-2">
                                        <a href="<?= base_url('auth'); ?>">
                                            <span><img src="<?= base_url(); ?>assets/img/jatisaba.png" alt="" height="50"></span>
                                        </a>
                                    </div>
                                    <h5 class="text-muted text-uppercase py-3 font-16">Sign Up</h5>
                                </div>

                                <form action="<?= base_url('auth/r'); ?>" class="mt-2" method="post">

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" required="" placeholder="username" name="nama" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" required="" placeholder="email" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" required="" id="password" placeholder="password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Daftar </button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row ">
                                                <div class="col-12 text-center">
                                                    <p class="text-dark-50">Sudah Punya Akun? <a href="<?= base_url('auth'); ?>" class="text-primary ml-1"><b>Sign In</b></a></p>
                                                </div> <!-- end col -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>


            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- Vendor js -->
    <script src="<?= base_url(); ?>assets/vertical/dist/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url(); ?>assets/vertical/dist/assets/js/app.min.js"></script>

</body>

</html>