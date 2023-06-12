<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Peta Sebaran</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        </div>
    </div>
    <form action="<?= base_url('admin/Data_peta/edit_peta_aksi/' . $peta[0]->id) ?>" method="post">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="">Kuala Lumpur:</label>
                <input type="number" class="form-control" value="<?= $peta[0]->kuala_lumpur ?>" name="kuala_lumpur">
                <?= form_error('kuala_lumpur', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-4 form-group">
                <label for="">Putrajaya:</label>
                <input type="number" class="form-control" value="<?= $peta[0]->putrajaya ?>" name="putrajaya">
                <?= form_error('putrajaya', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-4 form-group">
                <label for="">Selangor:</label>
                <input type="number" class="form-control" value="<?= $peta[0]->selangor ?>" name="selangor">
                <?= form_error('selangor', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="">Perak:</label>
                <input type="number" class="form-control" value="<?= $peta[0]->perak ?>" name="perak">
                <?= form_error('perak', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-4 form-group">
                <label for="">Kelantan:</label>
                <input type="number" class="form-control" value="<?= $peta[0]->kelantan ?>" name="kelantan">
                <?= form_error('kelantan', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="col-md-4 form-group">
                <label for="">Terengganu:</label>
                <input type="number" class="form-control" value="<?= $peta[0]->terengganu ?>" name="terengganu">
                <?= form_error('terengganu', '<span class="text-small text-danger">', '</span>') ?>
            </div>
        </div>
        <a href="<?= base_url('admin/Data_peta') ?>" class="btn btn-danger mt-4 mr-2 float-center">Kembali</a>
        <button type="submit" class="btn btn-success mt-4 float-center">Simpan</button>
    </form>
</div>