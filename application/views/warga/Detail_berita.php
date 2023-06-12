<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2><?= $detail_berita[0]->judul ?></h2>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="card" style="margin-bottom: 20px;">
                        <img src="<?= base_url('assets/upload/berita/' . $detail_berita[0]->gambar) ?>">
                        <div class="card-body">
                            <h3><?= $detail_berita[0]->judul ?></h3>
                            <p><?= $detail_berita[0]->isi ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Berita Lainnya</h3>
                        </div>
                        <div class="card-body">
                            <?php foreach ($berita_selain as $bs) : ?>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="<?= base_url('assets/upload/berita/' . $bs->gambar) ?>" class="img img-thumbnail">
                                    </div>
                                    <div class="col-9">
                                        <h4 style="font-size: 18px;">
                                            <a href="<?= base_url('warga/Data_berita/detail/') . $bs->id ?>">
                                                <?= $bs->judul ?> </a>
                                        </h4>
                                    </div>
                                    <div class="clearfix">
                                        <br>
                                    </div>
                                    <hr>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>