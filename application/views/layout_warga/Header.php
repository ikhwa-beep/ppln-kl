<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PPLN KL</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <link rel = "icon" href = "<?= base_url('assets/template/') ?>assets/img/logo kpu.png" 
        type = "image/x-icon">
    <link href="<?= base_url('assets/template/') ?>assets/img/logo kpu.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/') ?>assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex"> <i class="bi bi-clock"></i> <?= $konfigurasi[0]->jam_kerja ?></div>
            <div class="d-flex align-items-center"> <i class="bi bi-phone"></i> Hubungi Kami <?= $konfigurasi[0]->no_hp ?></div>
        </div>
    </div>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center"> <a href="<?= base_url('warga/Dashboard') ?>" class="logo me-auto"><img src="<?= base_url('assets/template/assets/img/'.$konfigurasi[0]->logo_web) ?>" alt=""></a>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url('warga/Dashboard') ?>">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('warga/Data_berita') ?>">Berita</a></li>
                    <!-- <li><a class="nav-link scrollto" href="<?//= base_url('warga/Dashboard/peta') ?>">Peta Sebaran</a></li> -->
                    <!-- <li><a class="nav-link scrollto" href="<?//= base_url('warga/Dashboard/cek_dpt') ?>">Cek DPT</a></li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url('warga/Dashboard/informasi') ?>">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('warga/Dashboard/kontak') ?>">Kontak PPLN</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> -->
                </ul> <i class="bi bi-list mobile-nav-toggle"></i>
            </nav> <a href="<?= base_url('warga/Dashboard/kontak') ?>" class="appointment-btn scrollto"><span class="d-none d-md-inline">Hubungi</span> Kami</a>
        </div>
    </header>