<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Anggota</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_anggota/tambah_anggota_aksi/') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Nama:</label>
                <input type="text" class="form-control" name="nama">
                <?= form_error('nama', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-3 form-group">
                <label for="">Gambar Anggota:</label>
                <input class="form-control" type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Jabatan:</label>
                <input type="text" class="form-control" name="jabatan">
                <?= form_error('jabatan', '<span class="text-small text-danger">', '</span>') ?>
                <a href="<?= base_url('admin/Data_anggota') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
                <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
            </div>
            <div class="col-md-3">
                <img id="output" style="margin-top: 10px;max-height: 300px;max-width: 100%;" />
            </div>
        </div>
    </form>
</div>