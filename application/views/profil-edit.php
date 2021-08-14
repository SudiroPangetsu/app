<div class="content-page bg-pattern">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title"><?= $title; ?></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-box">
                    <div class="col-lg-12">
                        <?= form_open_multipart('user/edit'); ?>
                        <div class="form-grup row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-grup row mt-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                        </div>
                        <div class="form-grup row mt-3">
                            <div class="col-sm-2">Gambar</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="img-thumbnail" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="file" name="gambar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=" row justify-content-end">
                        <div class="col-sm-6">
                            <div class="float-right">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?= base_url('user/profil'); ?>" class="btn btn-primary">kembali</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>