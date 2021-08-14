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
                <div class="card col-xl-12 ">
                    <div class="">
                        <form method="post" action="<?= base_url() . 'dashboard/update'; ?>" class="form grup">
                            <div class="bg-dark">
                                <h3 class="text-center mb-3 text-white p-3">From Edit Data <?= $update['nama']; ?></h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div>
                                        <input type="hidden" name="id" value="<?= $update['id']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomer Berkas</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nomerBerkas" placeholder="masukan nomer baerkas" name="nomerBerkas" value="<?= $update['nomer_berkas']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleSelect1">Kluster</label>
                                        <select class="form-control form-control-sm mb-3" id="kluster" name="kluster">
                                            <?php foreach ($kluster as $k) : ?>
                                                <?php if ($k == $update['kluster']) : ?>
                                                    <option value="<?= $k; ?>" selected><?= $k; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $k; ?>"><?= $k; ?></option>
                                                <?php endif ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIB</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nib" placeholder="masukan NIB" name="nib" value="<?= $update['nib']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Luas Tanah</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="luas" placeholder="masukan luas tanah" name="luas" value="<?= $update['luas']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blonko</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="blanko" placeholder="masukan nomer blanko" name="blanko" value="<?= $update['blanko']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alasan K3</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="ak3" placeholder="masukan Alasan K3" name="ak3" value="<?= $update['alasan_k3']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomer Alas Hak</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="nah" placeholder="masukan Nomer Alas Hak" name="nah" value="<?= $update['nomer_alas_hak']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat Obyek</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="ao" placeholder="masukan Alamat Obyek" name="ao" value="<?= $update['alamat_obyek']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BLok</label>
                                        <select class="form-control form-control-sm mb-3" id="blok" name="blok">
                                            <?php foreach ($blok as $b) : ?>
                                                <?php if ($b == $update['alamat_tambahan']) : ?>
                                                    <option value="<?= $b ?>" selected><?= $b; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $b; ?>"><?= $b; ?></option>
                                                <?php endif ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">SU</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="su" placeholder="masukan SU" name="su" value="<?= $update['su']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No SHM</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="shm" placeholder="masukan Nomer SHM" name="shm" value="<?= $update['no_shm']; ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Desa</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="desa" placeholder="masukan desa tanah" name="desa" value="<?= $update['desa']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kecamatan</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="kecamatan" placeholder="masukan kecamatan tanah" name="kecamatan" value="<?= $update['kecamatan']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nama" placeholder="masukan nama tanah" name="nama" value="<?= $update['nama']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIK</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nik" placeholder="masukan nik tanah" name="nik" value="<?= $update['nik']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="alamat" placeholder="masukan alamat" name="alamat" value="<?= $update['alamat']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pekerjaan</label>
                                        <select class="form-control form-control-sm mb-3" id="pekerjaan" name="pekerjaan" value="<?= $update['pekerjaan']; ?>">
                                            <option>Tidak Berkerja</option>
                                            <option>Kariawan Swasta</option>
                                            <option>PNS</option>
                                            <option>pedagang</option>
                                            <option>petani</option>
                                            <option>Buruh</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tempat Lahir</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="tmtLahir" placeholder="masukan tempat lahir" name="tmtLahir" value="<?= $update['tempat_lahir']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl" id="tgl" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tanggal_lahir']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-6 ">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">PBT</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="pbt" placeholder="masukan PBT" name="pbt" value="<?= $update['pbt']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">DI201B</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="N_DI201B" placeholder="masukan nomer DI201B" name="N_DI201B" value="<?= $update['di201b']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal DI201B</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="DI201B" id="DI201B" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di201b']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor 202</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="nmr202" placeholder="masukan nomer 202" name="nmr202" value="<?= $update['no_202']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal 202</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="no_202" id="no_202" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_202']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor DI305</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="di3" placeholder="masukan nomer DI305" name="di3" value="<?= $update['di305']; ?>">
                                    </div>


                                    <div class="form-group">
                                        <label>Tanggal DI305</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl_DI305" id="tgl_DI305" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di305']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor DI301</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="DI301" placeholder="masukan nomer DI301" name="DI301" value="<?= $update['di301']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal DI301</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl_DI301" id="tgl_DI301" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di301']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor DI302</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="DI302" placeholder="masukan nomer DI302" name="DI302" value="<?= $update['di302']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal DI302</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl_DI302" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di302']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor DI307 SU</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="DI307_SU" placeholder="masukan nomer DI307_SU" name="DI307_SU" value="<?= $update['di307_su']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal DI307_SU</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl_DI307_SU" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di307_su']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor DI307 HAK</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="DI307_HAK" placeholder="masukan nomer DI307 HAK" name="DI307_HAK" value="<?= $update['di307_hak']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal DI307 HAK</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl_DI307_HAK" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di307_hak']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor DI208</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="DI208" placeholder="masukan nomer DI208" name="DI208" value="<?= $update['di208']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal DI208</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl_DI208" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di208']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor DI301A</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="DI301A" placeholder="masukan nomer DI301A" name="DI301A" value="<?= $update['di301a']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal DI301A</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl_DI301A" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true" value="<?= $update['tgl_di301a']; ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-print-none ">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success waves-effect waves-light ml-3 mb-3"> <span class=" mdi mdi-home-edit-outline"> SAVE</span></button>
                                        <a href="<?= base_url('dashboard'); ?>" class="btn btn-primary waves-effect waves-light mb-3">kembali</a>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>