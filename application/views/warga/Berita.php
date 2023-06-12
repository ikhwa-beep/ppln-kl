<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Berita PPLN KL</h2>
                <ol>
                    <li><a href="<?= base_url('warga/Dashboard') ?>">Beranda</a></li>
                    <li>Berita PPLN KL</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row mt-5">
                <?php foreach ($berita as $bt) : ?>
                    <div class="col-md-4" style="align-items: stretch;display: flex;margin-bottom: 20px;">
                        <div class="card">
                            <img src="<?= base_url('assets/upload/berita/' . $bt->gambar) ?>">
                            <div class="card-body">
                                <h3><?= $bt->judul ?></h3>
                                <p class="card-text" style="text-align: justify;">
                                    <?= $bt->isi_singkat ?></p>
                                <p>
                                    <a href="<?= base_url('warga/Data_berita/detail/') . $bt->id ?>" class="btn btn-success" style="float: right;">
                                        <i class="fa fa-chevron-right"></i> Lanjutkan Membaca
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main --><!-- ======= Footer ======= -->