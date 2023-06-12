<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Kontak</h2>
                <ol>
                    <li><a href="<?= base_url('warga/Dashboard') ?>">Beranda</a></li>
                    <li>Kontak</li>
                </ol>
            </div>
        </div>
    </section>

    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Pertanyaan Yang sering Ditanyakan</h2>
                <p>Berikut adalah beberapa pertanyaan yang sangat sering ditanyakan oleh warga indonesia yang tinggal di malaysia mengenai KPU, PPLN, dan Pantarlih.</br><em>( klik pertanyaan untuk melihat jawaban )</em></p>
            </div>
            <ul class="faq-list">
                <?php foreach ($pertanyaan as $pt) : ?>
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#A<?= $pt->id ?>"><?= $pt->pertanyaan ?><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="A<?= $pt->id ?>" class="collapse" data-bs-parent=".faq-list">
                            <p><?= $pt->jawaban ?></p>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Kontak</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>
        </div>
        <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=600&height=400&hl=en&q=<?= $konfigurasi[0]->map ?>&t=&z=14&ie=UTF8&iwloc=B&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box"> <i class="bx bx-map"></i>
                                <h3>Alamat</h3>
                                <p><?= $konfigurasi[0]->alamat ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4"> <i class="bx bx-envelope"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:<?= $konfigurasi[0]->email ?>" class="__cf_email__" data-cfemail="761f18101936130e171b061a135815191b"><?= $konfigurasi[0]->email ?></a></p>
                                <!-- <p>pplnkualalumpur@kpu.go.id</p>-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4"> <i class="bx bx-phone-call"></i>
                                <h3>Telepon Kami</h3>
                                <a href="tel:+60167347441" target="_blank">
                                    <p>+60167347441</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group"> <input type="text" name="name" class="form-control" id="name" placeholder="Nama"></div>
                            <div class="col-md-6 form-group mt-3 mt-md-0"> <input type="email" class="form-control" name="email" id="email" placeholder="Email"></div>
                        </div>
                        <div class="form-group mt-3"> <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul"></div>
                        <div class="form-group mt-3"><textarea class="form-control" name="message" rows="7" placeholder="Pesan"></textarea></div>
                        <div class="my-3">
                            <div class="loading">Loading...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan kamu berhasil dikirim. Terima kasih!</div>
                        </div>
                        <a href="mailto:pplnkualalumpur@kpu.go.id" class="text-center" style="background: #E7301C;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 4px;">Kirim Pesan</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<script></script>