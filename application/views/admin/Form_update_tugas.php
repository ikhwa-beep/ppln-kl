<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update tugas</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_tugas/edit_tugas_aksi/' . $tugas[0]->id) ?>" method="post">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">judul:</label>
                <input type="text" class="form-control" value="<?= $tugas[0]->judul ?>" name="judul">
                <?= form_error('judul', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">Keterangan Tugas:</label>
                <input type="text" class="form-control" value="<?= $tugas[0]->isi ?>" name="isi">
                <?= form_error('isi', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="">Icon:</label>
                <input type="text" class="form-control" value="<?= $tugas[0]->icon ?>" name="icon">
                <?= form_error('icon', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-2 form-group">
                <label for="">&nbsp;</label>
                <a target="_blank" href="https://fontawesome.com/v5/search" class="btn btn-info form-control">Lihat Koleksi Icon</a>
            </div>
        </div>
        <a href="<?= base_url('admin/Data_tugas') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>