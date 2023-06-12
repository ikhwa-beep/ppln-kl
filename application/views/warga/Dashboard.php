<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url(<?= base_url('assets/template/') ?>assets/img/slide/slide-1.jpg)">
                <div class="container">
                    <h2><?= $konfigurasi[0]->judul_welcome ?></h2>
                    <p><?= $konfigurasi[0]->isi_welcome ?></p> <a href="<?= base_url('warga/Dashboard/informasi') ?>" class="btn-get-started scrollto">Cek Data Saya</a>
                </div>
            </div>
            <?php foreach ($berita as $br) : ?>
                <div class="carousel-item" style="background-image: url(<?= base_url('assets/upload/berita/' . $br->gambar) ?>)">
                    <div class="container">
                        <h2><?= $br->judul ?></h2>
                        <p><?= $br->isi_singkat ?></p>
                        <a href="<?= base_url('warga/Data_berita/detail/') . $br->id ?>" class="btn-get-started scrollto">Lanjutkan Membaca</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span> </a> <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span> </a>
    </div>
</section>
<main id="main">
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <section id="cta" class="cta mb-4">
                <div class="container" data-aos="zoom-in">
                    <div class="text-center">
                        <h3>Ingin Cek Status Data Pemilu 2024 Anda ?</h3>
                        <p> Jika Ingin Mengetahui Status Data Pemilu 2024 Anda Atau Ingin Mendaftarkan Diri Anda Sebagai Peserta Pemilu 2024, Silahkan Tekan Tombol Dibawah ini.</p>
                        <a class="cta-btn scrollto" href="<?= base_url('warga/Dashboard/kontak') ?>">Cek Data Saya</a>
                    </div>
                </div>
            </section>
            <div class="row">
                <?php
                $no = 1;
                foreach ($tugas as $tg) :
                ?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 <?= $no++ > 4 ? 'mt-5' : '' ?> mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="<?= $tg->icon ?>"></i></div>
                            <h4 class="title"><?= $tg->judul ?></h4>
                            <p class="description"><?= $tg->isi ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-address-card"></i></div>
                        <h4 class="title"><a href="">Melakukan rekapitulasi hasil perhitungan</a></h4>
                        <p class="description">Melakukan rekapitulasi hasil perhitungan suara dari seluruh TPSLN dalam wilayah kerjanya dan hasil pemungutan suara melalui pos</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-book"></i></div>
                        <h4 class="title"><a href="">Melakukan evaluasi dan membuat laporan</a></h4>
                        <p class="description">Melakukan evaluasi dan membuat laporan setiap tahapan penyelenggaraan Pemilu di wilayah kerjanya</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <h4 class="title"><a href="">Melaksanakan sosialisasi</a></h4>
                        <p class="description">Melaksanakan sosialisasi penyelenggaraan Pemilu dan/atau yang berkaitan dengan tugas dan wewenang PPLN kepada masyarakat Indonesia di luar negeri</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section id="cta" class="cta" style="padding: 1%;">
    </section>
    <!-- <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box"> <i class="fas fa-user-md"></i> <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Anggota PPLN KL</strong> consequuntur quae qui deca rode</p> <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box"> <i class="far fa-hospital"></i> <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p> <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box"> <i class="fas fa-flask"></i> <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p> <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box"> <i class="fas fa-award"></i> <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p> <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                        <div class="icon-box mt-5 mt-lg-0"> <i class="bx bx-receipt"></i>
                            <h4>Est labore ad</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="icon-box mt-5"> <i class="bx bx-cube-alt"></i>
                            <h4>Harum esse qui</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                        <div class="icon-box mt-5"> <i class="bx bx-images"></i>
                            <h4>Aut occaecati</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                        <div class="icon-box mt-5"> <i class="bx bx-shield"></i>
                            <h4>Beatae veritatis</h4>
                            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("<?= base_url('assets/template/') ?>assets/img/features.jpg");' data-aos="zoom-in"></div>
                </div>
            </div>
        </section>
        <section id="services" class="services services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-dna"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-wheelchair"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-notes-medical"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="appointment" class="appointment section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Hubungi Kami</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-md-4 form-group"> <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required></div>
                        <div class="col-md-4 form-group mt-3 mt-md-0"> <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required></div>
                        <div class="col-md-4 form-group mt-3 mt-md-0"> <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3"> <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required></div>
                        <div class="col-md-4 form-group mt-3"> <select name="department" id="department" class="form-select">
                                <option value="">Select Department</option>
                                <option value="Department 1">Department 1</option>
                                <option value="Department 2">Department 2</option>
                                <option value="Department 3">Department 3</option>
                            </select></div>
                        <div class="col-md-4 form-group mt-3"> <select name="doctor" id="doctor" class="form-select">
                                <option value="">Select Doctor</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select></div>
                    </div>
                    <div class="form-group mt-3"><textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea></div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Hubungi Kami</button></div>
                </form>
            </div>
        </section>
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Departments</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item"> <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Quis</h4>
                                    <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                                </a></li>
                            <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Voluptas</h4>
                                    <p>Voluptas vel esse repudiandae quo excepturi.</p>
                                </a></li>
                            <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Velit</h4>
                                    <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                                </a></li>
                            <li class="nav-item mt-2"> <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                    <h4>Ratione</h4>
                                    <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                                </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Quis</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> <img src="<?= base_url('assets/template/') ?>assets/img/departments-1.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Voluptas</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> <img src="<?= base_url('assets/template/') ?>assets/img/departments-2.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Velit</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> <img src="<?= base_url('assets/template/') ?>assets/img/departments-3.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <h3>Ratione</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> <img src="<?= base_url('assets/template/') ?>assets/img/departments-4.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Anggota Kami</h2>
                    <p>Berikut adalah para anggota panitia pemilihan luar negeri untuk pemilu tahun 2024.</p>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i> Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i> Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i> Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i> Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section> -->
    <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Anggota Kami</h2>
                <p>Berikut adalah para anggota panitia pemilihan luar negeri untuk pemilu tahun 2024.</p>
            </div>
            <div class="row">

                <?php foreach ($anggota as $ag) : ?>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img"> <img src="<?= base_url('assets/upload/anggota/') . $ag->gambar ?>" class="img-fluid" alt="">
                                <!-- <div class="social"> <a href=""><i class="bi bi-twitter"></i></a> <a href=""><i class="bi bi-facebook"></i></a> <a href=""><i class="bi bi-instagram"></i></a> <a href=""><i class="bi bi-linkedin"></i></a></div> -->
                            </div>
                            <div class="member-info">
                                <h4><?= $ag->nama ?></h4> <span><?= $ag->jabatan ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img"> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-2.jpg" class="img-fluid" alt="">
                            <div class="social"> <a href=""><i class="bi bi-twitter"></i></a> <a href=""><i class="bi bi-facebook"></i></a> <a href=""><i class="bi bi-instagram"></i></a> <a href=""><i class="bi bi-linkedin"></i></a></div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4> <span>PPLN KL 2024</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img"> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-4.jpg" class="img-fluid" alt="">
                            <div class="social"> <a href=""><i class="bi bi-twitter"></i></a> <a href=""><i class="bi bi-facebook"></i></a> <a href=""><i class="bi bi-instagram"></i></a> <a href=""><i class="bi bi-linkedin"></i></a></div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4> <span>PPLN KL 2024</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img"> <img src="<?= base_url('assets/template/') ?>assets/img/testimonials/testimonials-3.jpg" class="img-fluid" alt="">
                            <div class="social"> <a href=""><i class="bi bi-twitter"></i></a> <a href=""><i class="bi bi-facebook"></i></a> <a href=""><i class="bi bi-instagram"></i></a> <a href=""><i class="bi bi-linkedin"></i></a></div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4> <span>PPLN KL 2024</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Partai</h2>
                <p>Berikut adalah partai yang akan berpartisipasi dalam pemilihan luar negeri untuk pemilu tahun 2024.</p>
            </div>
            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <?php foreach ($partai as $pt) : ?>
                        <div class="swiper-slide">
                            <a class="gallery-lightbox" href="<?= base_url('assets/upload/partai/' . $pt->gambar) ?>"><img src="<?= base_url('assets/upload/partai/' . $pt->gambar) ?>" class="img-fluid" alt=""></a>
                        </div>
                    <?php endforeach ?><!-- <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-2.jpg"><img src="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-3.jpg"><img src="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-4.jpg"><img src="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-5.jpg"><img src="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-6.jpg"><img src="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-7.jpg"><img src="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-8.jpg"><img src="<?= base_url('assets/template/') ?>assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap"> <a href="#" class="btn-buy">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap"> <a href="#" class="btn-buy">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="300">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap"> <a href="#" class="btn-buy">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400"> <span class="advanced">Advanced</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap"> <a href="#" class="btn-buy">Buy Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Frequently Asked Questioins</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <ul class="faq-list">
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p> Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p> Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p> Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p> Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p> Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p> Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Kontak</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>
        </div>
        <div> <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=600&height=400&hl=en&q=<?= $konfigurasi[0]->map ?>&t=&z=14&ie=UTF8&iwloc=B&output=embed" frameborder="0" allowfullscreen></iframe></div>
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
                        <div class="col-md-6" >
                            <div class="info-box mt-4"> <i class="bx bx-envelope"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:<?= $konfigurasi[0]->email ?>" class="__cf_email__" data-cfemail="761f18101936130e171b061a135815191b"><?= $konfigurasi[0]->email ?></a></p>
                                <!-- <p>pplnkualalumpur@kpu.go.id</p> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4"> <i class="bx bx-phone-call" ></i>
                                <h3>Telepon Kami</h3>
                                <a href="tel:<?= $konfigurasi[0]->no_hp ?>" target="_blank">
                                    <p><?= $konfigurasi[0]->no_hp ?></p>
                                </a>
                                <a href="tel:<?= $konfigurasi[0]->no_kesekretariatan ?>" target="_blank">
                                    <p><?= $konfigurasi[0]->no_kesekretariatan ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="<?= base_url('warga/Dashboard/kirim_email') ?>" method="post" role="form" class="php-email-form">
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