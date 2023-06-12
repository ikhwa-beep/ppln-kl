<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>konfigurasi</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_konfigurasi/edit_konfigurasi_aksi/') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="">Jam Kerja:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->jam_kerja ?>" name="jam_kerja">
                <?= form_error('jam_kerja', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-3 form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->email ?>" name="email">
                <?= form_error('email', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-3 form-group">
                <label for="">No HP PPLN:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->no_hp ?>" name="no_hp">
                <?= form_error('no_hp', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-3 form-group">
                <label for="">No HP Kesekretariatan:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->no_kesekretariatan ?>" name="no_kesekretariatan">
                <?= form_error('no_kesekretariatan', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">Judul Pesan Pembuka:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->judul_welcome ?>" name="judul_welcome">
                <?= form_error('judul_welcome', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="">Isi Pesan Pembuka:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->isi_welcome ?>" name="isi_welcome">
                <?= form_error('isi_welcome', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">Alamat:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->alamat ?>" name="alamat">
                <?= form_error('alamat', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="">Pesan WhatsApp:</label>
                <input type="text" class="form-control" value="<?= $konfigurasi[0]->pesan_wa ?>" name="pesan_wa">
                <?= form_error('pesan_wa', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">Lokasi Map:</label>
                <input id="lokasi" type="text" class="form-control" value="<?= $konfigurasi[0]->map ?>" name="map" onkeypress="myFunction()">
                <?= form_error('map', '<span class="text-small text-danger">', '</span>') ?>
                <iframe id="map" style="border:0; width: 100%; height: 350px;margin-top: 10px;" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 form-group">
                <label for="">Logo Web:</label>
                <input class="form-control" type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)">
                <img id="output" style="margin-top: 10px;max-height: 350px;max-width: 100%;" src="<?= base_url('assets/template/assets/img/') . $konfigurasi[0]->logo_web ?>" />
            </div>
        </div>
        <a href="<?= base_url('admin/Data_konfigurasi') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
        <a onclick="return confirm('Yakin Ingin Mereset Data Konfigurasi ke Data Awal ?')" href="<?= base_url('admin/Data_konfigurasi/reset_konfigurasi') ?>" class="btn btn-info mt-4 mr-2 float-right">Reset Data Konfigurasi ke Data Awal</a>
    </form>
</div>