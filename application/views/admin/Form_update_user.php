<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update User</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-3">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_user/edit_user_aksi/' . $user[0]->id) ?>" method="post" enctype="multipart/form-data">
        <!-- <div class="col-md-3 form-group">
            <label for="">Role ID:</label>
            <select name="role_id" id="" class="form-control">
                <option value="<? //= $user[0]->role_id 
                                ?>" <? //= $user[0]->role_id == 0 ? 'selected' : '' 
                                                            ?>>Pengisi Berita</option>
                <option value="<? //= $user[0]->role_id 
                                ?>" <? //= $user[0]->role_id == 1 ? 'selected' : '' 
                                                            ?>>Admin</option>
            </select>
        </div> -->
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Username:</label>
                <input type="text" class="form-control" name="username" value="<?= $user[0]->username ?>">
                <?= form_error('username', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <a href="<?= base_url('admin/Data_user') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>