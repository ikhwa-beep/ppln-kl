<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah pertanyaan</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_pertanyaan/tambah_pertanyaan_aksi/') ?>" method="post">
        <div class="col-md-6 form-group">
            <label for="">Pertanyaan:</label>
            <input type="text" class="form-control" name="pertanyaan">
            <?= form_error('pertanyaan', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="col-md-6 form-group">
            <label for="">Jawaban:</label>
            <input type="text" class="form-control" name="jawaban">
            <?= form_error('jawaban', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <a href="<?= base_url('admin/Data_pertanyaan') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>