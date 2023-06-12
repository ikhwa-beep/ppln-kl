<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah User</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-3">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_user/tambah_user_aksi/') ?>" method="post" enctype="multipart/form-data">
        <!-- <div class="col-md-3 form-group">
                <label for="">Role ID:</label>
                <select name="role_id" id="" class="form-control">
                    <option value=0>Pengisi Berita</option>
                    <option value=1>Admin</option>
                </select>
            </div> -->
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Username:</label>
                <input type="text" class="form-control" name="username">
                <?= form_error('username', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Password:</label>
                <input type="text" class="form-control" name="password">
                <?= form_error('password', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <a href="<?= base_url('admin/Data_user') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>