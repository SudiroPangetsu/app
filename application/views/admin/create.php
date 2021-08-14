<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h2 class="page-title"><?= $title; ?></h2>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="card col-xl-12">
                    <div class="justify-content-center">
                        <div class="bg-dark">
                            <h3 class="text-center mb-3 text-white p-3">From Tambah Data</h3>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <form method="post" action="<?= base_url() . 'dashboard/create'; ?>" class="form grup">

                                    <?php if (validation_errors()) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= validation_errors(); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomer Berkas</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nomerBerkas" placeholder="Masukan nomer baerkas" name="nomerBerkas">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleSelect1">Kluster</label>
                                        <select class="form-control form-control-sm mb-3" id="kluster" name="kluster">
                                            <?php foreach ($kluster as $k) : ?>
                                                <option><?= $k; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIB</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nib" placeholder="Masukan NIB" name="nib">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Luas Tanah</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="luas" placeholder="Masukan luas tanah" name="luas">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blonko</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="blanko" placeholder="Masukan nomer blanko" name="blanko">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alasan K3</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="ak3" placeholder="Masukan Alasan K3" name="ak3">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomer Alas Hak</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="nah" placeholder="Masukan Nomer Alas Hak" name="nah">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat Obyek</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="ao" placeholder="Masukan Alamat Obyek" name="ao">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BLok</label>
                                        <select class="form-control form-control-sm mb-3" id="blok" name="blok">
                                            <?php foreach ($blok as $k) : ?>
                                                <option><?= $k; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">SU</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="su" placeholder="Masukan SU" name="su">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No SHM</label>
                                        <input type="text" class="form-control form-control-sm col-lg-12" id="shm" placeholder="Masukan Nomer SHM" name="shm">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Desa</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="desa" placeholder="Masukan desa tanah" name="desa">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kecamatan</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="kecamatan" placeholder="Masukan kecamatan tanah" name="kecamatan">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nama" placeholder="Masukan nama tanah" name="nama">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIK</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="nik" placeholder="Masukan nik tanah" name="nik">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input type="text" class="form-control form-control-sm mb-3" id="alamat" placeholder="Masukan alamat" name="alamat">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pekerjaan</label>
                                        <select class="form-control form-control-sm mb-3" id="pekerjaan" name="pekerjaan">
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
                                        <input type="text" class="form-control form-control-sm mb-3" id="tmtLahir" placeholder="Masukan tempat lahir" name="tmtLahir">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" name="tgl" id="tgl" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-6">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">PBT</label>
                                    <input type="text" class="form-control form-control-sm mb-3" id="pbt" placeholder="Masukan PBT" name="pbt">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">DI201B</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="N_DI201B" placeholder="Masukan nomer DI201B" name="N_DI201B">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal DI201B</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="DI201B" id="DI201B" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor 202</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="nmr202" placeholder="Masukan nomer 202" name="nmr202">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal 202</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="no_202" id="no_202" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor DI305</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="di3" placeholder="Masukan nomer DI305" name="di3">
                                </div>


                                <div class="form-group">
                                    <label>Tanggal DI305</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="tgl_DI305" id="tgl_DI305" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor DI301</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="DI301" placeholder="Masukan nomer DI301" name="DI301">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal DI301</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="tgl_DI301" id="tgl_DI301" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor DI302</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="DI302" placeholder="Masukan nomer DI302" name="DI302">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal DI302</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="tgl_DI302" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor DI307 SU</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="DI307_SU" placeholder="Masukan nomer DI307_SU" name="DI307_SU">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal DI307_SU</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="tgl_DI307_SU" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor DI307 HAK</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="DI307_HAK" placeholder="Masukan nomer DI307 HAK" name="DI307_HAK">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal DI307 HAK</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="tgl_DI307_HAK" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor DI208</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="DI208" placeholder="Masukan nomer DI208" name="DI208">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal DI208</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="tgl_DI208" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor DI301A</label>
                                    <input type="text" class="form-control form-control-sm col-lg-12" id="DI301A" placeholder="Masukan nomer DI301A" name="DI301A">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal DI301A</label>
                                    <div>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" name="tgl_DI301A" id="tgl_DI302" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-xs mt-3 mb-3 p-2 ">Simpan</button>
                        <a href="<?= base_url('dashboard'); ?>" class="btn btn-primary waves-effect waves-light">kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>