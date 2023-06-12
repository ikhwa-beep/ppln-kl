<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Informasi</h2>
                <ol>
                    <li><a href="<?= base_url('warga/Dashboard') ?>">Beranda</a></li>
                    <li>Informasi</li>
                </ol>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <?php foreach ($informasi as $im) : ?>
                <div class="section-title">
                    <h2><?= $im->judul ?></h2>
                </div>
                <?= $im->isi ?>
                <div class="information-ending"></div>
            <?php endforeach ?>
        </div>
    </section>
</main>
<script></script>