<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Informasi</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_informasi/tambah_informasi_aksi/') ?>" method="post">
        <div class="form-group">
            <label for="">judul:</label>
            <input type="text" class="form-control" name="judul">
            <?= form_error('judul', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="form-group">
            <label for="">Isi Informasi:</label>
            <textarea name="isi" class="summernote" style="display: none;"></textarea>
            <?= form_error('isi', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <a href="<?= base_url('admin/Data_informasi') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>