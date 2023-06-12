<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Peta Sebaran</h2>
                <ol>
                    <li><a href="<?= base_url('warga/Dashboard') ?>">Beranda</a></li>
                    <li>Peta Sebaran</li>
                </ol>
            </div>
        </div>
    </section>
    <div class="section-title" style="padding: 5% 20% 0 20%;">
        <h2>Peta Sebaran</h2>
        <p>Berikut Adalah Data DPT Yang Sudah Terverifikasi Oleh PPLN Kuala Lumpur.</p>
    </div>
    <div class="container" style="justify-content: center;display: flex;margin-bottom: 8%">
        <input type="hidden" value="<?php print_r($peta[0]) ?>" id="wilayah" alt="">
        <div id="map"></div>
    </div>
</main>