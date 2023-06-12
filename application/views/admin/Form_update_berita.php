<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Berita</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_berita/edit_berita_aksi/'.$berita[0]->id) ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">Judul:</label>
                <input type="text" class="form-control" value="<?= $berita[0]->judul ?>" name="judul">
                <?= form_error('judul', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="">Isi Singkat:</label>
                <input type="text" class="form-control" value="<?= $berita[0]->isi_singkat ?>" name="isi_singkat">
                <?= form_error('isi_singkat', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 form-group">
                <label for="">Isi Berita:</label>
                <textarea class="summernote" style="display: none;height: 340px" name="isi"><?= $berita[0]->isi ?></textarea>
                <?= form_error('isi', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-3 form-group">
                <label for="">Gambar Thumbnail:</label>
                <input class="form-control" type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)">
                <img id="output" style="margin-top: 10px;max-height: 250px;max-width: 100%;" src="<?= base_url('assets/upload/berita/').$berita[0]->gambar ?>"/>
                <?= form_error('image', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <a href="<?= base_url('admin/Data_berita') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>