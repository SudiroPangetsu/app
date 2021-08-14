<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h2 class="page-title"><?= $title; ?> = <span class="badge badge-success mr-1"><?= $total_page; ?> Data</span></h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-6">
                    <div class="card-box">
                        <h1 class="header-title mb-3 text-center text-uppercase">Data INVENTORY Dan Bidang Tanah Desa Jatisaba kategori <?= $title; ?></h1>
                        <div class="page-title-right">
                            <a href="<?= base_url('laporan/') . $ses ?>" class="btn btn-success waves-effect waves-light mb-3"><i class="fa fa-print"></i> Export Excel</a>
                        </div>
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

                                                <a href="<?= base_url('dashboard/delet/') . $inv['id']; ?>" class="btn btn-danger p-2 mt-1"> <span class="mdi mdi-delete-outline "> Delet</span></a>
                                            </td>

                                        </tr>

                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>
            </div><!-- end col-->
        </div>
    </div>
</div>