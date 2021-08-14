<div class="content-page">
    <div class="content">

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
                <div class="col-12">
                    <div class="card-box">
                        <!-- <div class="panel-heading">
                                <h4>Invoice</h4>
                            </div> -->
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="float-sm-left">
                                    <h4 class="text-uppercase mt-2"><?= $detail->nama; ?></h4>
                                </div>
                            </div>
                            <!-- end row -->
                            <hr>
                            <div class="row border border-dark">
                                <div class="col-6">
                                    <div class="table-responsive">
                                        <table class="table border">
                                            <thead>
                                                <tr>
                                                    <th scope="col-5" class="font-weight-bold">Nomer Berkas</th>
                                                    <td><?= $detail->nomer_berkas; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Kluster</th>
                                                    <td><?= $detail->kluster; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Alasan Kluster K3</th>
                                                    <td><?= $detail->alasan_k3; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Nomer Alas Hak</th>
                                                    <td><?= $detail->nomer_alas_hak; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Alamat Obyek</th>
                                                    <td><?= $detail->alamat_obyek; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">BLOK</th>
                                                    <td class="text-uppercase"><?= $detail->alamat_tambahan; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">SU</th>
                                                    <td><?= $detail->su; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">No SHM</th>
                                                    <td><?= $detail->no_shm; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">NIB</th>
                                                    <td><?= $detail->nib; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Luas</th>
                                                    <td><?= $detail->luas; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Blanko</th>
                                                    <td><?= $detail->blanko; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">PBT</th>
                                                    <td><?= $detail->pbt; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold ">Tempat Lahir</th>
                                                    <td class="text-capitalize"><?= $detail->tempat_lahir; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold ">tanggal Lahir</th>
                                                    <td class="text-capitalize"><?= $detail->tanggal_lahir; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold ">Alamat</th>
                                                    <td class="text-capitalize"><?= $detail->alamat; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Desa</th>
                                                    <td class="text-capitalize"><?= $detail->desa; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Kecamatan</th>
                                                    <td class="text-capitalize"><?= $detail->kecamatan; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">Pekerjaan</th>
                                                    <td class="text-capitalize"><?= $detail->pekerjaan; ?></td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="table-responsive">
                                        <table class="table border">
                                            <thead>
                                                <tr>
                                                    <th class="col-6 font-weight-bold">DI201b</th>
                                                    <td><?= $detail->di201b; ?></td>
                                                <tr>
                                                    <th>Tanggal DI201b</th>
                                                    <td><?= $detail->tgl_di201b; ?></td>
                                                </tr>

                                                <tr>
                                                    <th class="font-weight-bold">Nomer 202</th>
                                                    <td><?= $detail->no_202; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal 202</th>
                                                    <td><?= $detail->tgl_202; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">DI305</th>
                                                    <td><?= $detail->di305; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal DI305</th>
                                                    <td><?= $detail->tgl_di305; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">DI301</th>
                                                    <td><?= $detail->di301; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal DI301</th>
                                                    <td><?= $detail->tgl_di301; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">DI302</th>
                                                    <td><?= $detail->di302; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal DI302</th>
                                                    <td><?= $detail->tgl_di302; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">DI307 SU</th>
                                                    <td><?= $detail->di307_su; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal DI307 SU</th>
                                                    <td><?= $detail->tgl_di307_su; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">DI307 HAK</th>
                                                    <td><?= $detail->di307_hak; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal DI307 HAK</th>
                                                    <td><?= $detail->tgl_di307_hak; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">DI208</th>
                                                    <td><?= $detail->di208; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal DI208</th>
                                                    <td><?= $detail->tgl_di208; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-bold">DI301A</th>
                                                    <td><?= $detail->di301a; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal DI301A</th>
                                                    <td><?= $detail->tgl_di301a; ?></td>
                                                </tr>
                                            </thead>


                                        </table>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="d-print-none">
                                <div class="float-right">
                                    <a href="<?= base_url('laporan/detail/') . $detail->id ?>" class="btn btn-danger waves-effect waves-light"><i class="fa fa-print"></i></a>
                                    <a href="<?= base_url('dashboard'); ?>" class="btn btn-primary waves-effect waves-light">kembali</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
</div>
<!-- end wrapper -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->