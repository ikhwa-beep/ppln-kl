<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Partai</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_partai/tambah_partai_aksi/') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Nama:</label>
                <input type="text" class="form-control" name="nama">
                <?= form_error('nama', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-3 form-group">
                <label for="">Kepanjangan:</label>
                <input type="text" class="form-control" name="kepanjangan">
                <?= form_error('kepanjangan', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Web Partai:</label>
                <input type="text" class="form-control" name="web">
                <?= form_error('web', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-3 form-group">
                <label for="">Logo Partai:</label>
                <input class="form-control" type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)">
                <img id="output" style="margin-top: 10px;max-height: 300px;max-width: 100%;" />
            </div>
        </div>
        <a href="<?= base_url('admin/Data_partai') ?>" class="btn btn-danger mt-4 mr-2">Kembali</a>
        <button type="submit" class="btn btn-success mt-4">Simpan</button>
    </form>
</div>