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
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <h4 class="text-center"> <?= $this->session->flashdata('pesan'); ?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card-box tilebox-one">
                        <i class="icon-layers float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">Jumlah Data</h6>
                        <h3 class="my-3"> <span data-plugin="counterup"><?= $total; ?></span> Data</h3>
                        <span class="badge badge-success mr-1">inventory</span>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6">
                    <div class="card-box tilebox-one">
                        <i class=" fas fa-search  float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">Total Pencarian</h6>
                        <h3 class="my-3"><span data-plugin="counterup"><?= $total_page; ?></span> Data</h3>
                        <span class="badge badge-primary mr-1"> jumlah data pencarian</span>
                    </div>
                </div>

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card-box">
                        <form class="app-search" action="<?= base_url('dashboard/index'); ?>" method="post">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Masukan Nama Atau NIB..." name="keyword" autocomplete="off" autofocus>
                                    <div class="input-group-append">
                                        <input class="fas fa-search btn bg-dark " type="submit" name="submit" value="cari">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-xl-4 ">
                    <div class="card-box d-flex justify-content-center">
                        <a href="<?= base_url(); ?>dashboard/create" class="btn btn-warning waves-effect waves-light"><i class=" mdi mdi-credit-card-plus  ml-1"></i> Tambah Data</a>
                        <a href="<?= base_url('laporan/dashboard') ?>" class="btn btn-success waves-effect waves-light ml-3"><i class="fa fa-print"></i> Export Excel</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-6">
                    <div class="card-box">
                        <h1 class="header-title mb-3 text-center text-uppercase">Data INVENTORY Dan Bidang Tanah Desa Jatisaba</h1>

                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 1; width: 100%;">
                                <thead>
                                    <tr class="bg-dark text-white text-center">
                                        <th class="text-center">#</th>
                                        <th>Nama</th>
                                        <th>NIB</th>
                                        <th>Nomer Berkas</th>
                                        <th class="small">Alamat</th>
                                        <th>luas Tanah</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <?php if (empty($inventory)) : ?>
                                    <tr>
                                        <td colspan="7">
                                            <div class="alert alert-danger text-center" role="alert">
                                                data not found!!!
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php

                                foreach ($inventory as $inv) : ?>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><?= ++$start; ?></td>
                                            <td class="text-uppercase"><?= $inv['nama']; ?></td>
                                            <td class="text-muted"><?= $inv['nib']; ?></td>
                                            <td class="text-muted"><?= $inv['nomer_berkas']; ?></td>
                                            <td><?= $inv['alamat']; ?></td>
                                            <td><?= $inv['luas']; ?></td>
                                            <td class="text-center">

                                                <a href="<?= base_url('dashboard/detail/') . $inv['id']; ?>" class="btn btn-primary p-2 mt-1"> <span class="mdi mdi-account-card-details-outline"> Detail</span></a>

                                                <a href="<?= base_url('dashboard/edit/') . $inv['id']; ?>" class="btn btn-success p-2 mt-1"> <span class=" mdi mdi-home-edit-outline"> Edit</span></a>

                                                <a href="<?= base_url('dashboard/delet/') . $inv['id']; ?>" class="btn btn-danger p-2 mt-1"> <span class="mdi mdi-delete-outline " onclick="return confirm('Hapus?')"> Delet</span></a>
                                            </td>

                                        </tr>

                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div><!-- end col-->
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->

</div> <!-- end content -->