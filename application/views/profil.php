<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page bg-pattern">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title"><?= $title; ?></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if ($this->session->flashdata('pesan')) { ?>
                        <?= $this->session->flashdata('pesan'); ?>
                    <?php } ?>
                </div>
            </div>
            <!-- end page title -->
            <div class="row justify-content-center">
                <div class="card">
                    <div class="col-md-12">

                        <div class="card mt-3">
                            <img src="<?= base_url('assets/img/profile/') .  $user['gambar']; ?> " alt="user-image" style="width: 250px;">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Nama : <?= $user['nama']; ?></p>
                            <p class="card-text">Email : <?= $user['email']; ?></p>
                            <a href="<?= base_url('user/edit'); ?>" class="btn btn-success" style="width: 100%;"><i class=" fas fa-edit "></i> Edit Profil</a>
                        </div>

                    </div><!-- end col -->
                </div>
            </div>
        </div>

    </div><!-- end col-->

</div> <!-- end container-fluid -->

</div> <!-- end content -->