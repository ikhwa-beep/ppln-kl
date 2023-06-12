<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update pertanyaan</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_pertanyaan/edit_pertanyaan_aksi/'.$pertanyaan[0]->id) ?>" method="post">
        <div class="col-md-6 form-group">
            <label for="">Pertanyaan:</label>
            <input type="text" class="form-control" value="<?= $pertanyaan[0]->pertanyaan ?>" name="pertanyaan">
            <?= form_error('pertanyaan', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="col-md-6 form-group">
            <label for="">Jawaban:</label>
            <input type="text" class="form-control" value="<?= $pertanyaan[0]->jawaban ?>" name="jawaban">
            <?= form_error('jawaban', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <a href="<?= base_url('admin/Data_pertanyaan') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>