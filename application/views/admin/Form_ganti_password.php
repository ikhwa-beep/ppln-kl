<div class="main-content" >
    <section class="section">
        <div class="section-header">
            <h1>Ganti Password</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
                <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url() ?>Auth/ganti_password_aksi" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Password Lama:</label>
                    <input type="password" name="pass" class="form-control">
                    <?= form_error('pass', '<span class="text-small text-danger">', '</span>') ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Password Baru :</label>
                    <input type="password" name="pass1" class="form-control">
                    <?= form_error('pass1', '<span class="text-small text-danger">', '</span>') ?>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Ulangi Password Baru :</label>
                    <input type="password" name="pass2" class="form-control">
                    <?= form_error('pass2', '<span class="text-small text-danger">', '</span>') ?>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>