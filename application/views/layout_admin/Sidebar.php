<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>

          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false">
              <img style="object-fit: cover;width: 50px;height: 50px;" alt="image" src="https://demo.getstisla.com/assets/img/avatar/avatar-5.png" class="rounded-circle mr-3">
              <div class="d-sm-none d-lg-inline-block" style="font-size: 20px;">Hi, <?php echo $this->session->userdata('username') ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Menu</div>
              <a href="<?= base_url('Auth/logout') ?>" class="dropdown-item has-icon text-danger" onclick="return confirm('Yakin Ingin Keluar ?')">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar ">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('admin/Dashboard') ?>"><img src="<?= base_url('assets') ?>/logo_gedung.png" style="width: 50px;margin-right: 20px;" alt="...">PPLN KL</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('admin/Dashboard') ?>">PPLN</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_user') ?>"><i class="fas fa-users"></i> <span>Data User</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_anggota') ?>"><i class="fas fa-users"></i> <span>Data Anggota</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_partai') ?>"><i class="fas fa-flag"></i> <span>Data Partai</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_pertanyaan') ?>"><i class="fas fa-question"></i> <span>Data Pertanyaan</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_berita') ?>"><i class="fas fa-newspaper"></i> <span>Data Berita</span></a></li>
            <!-- <li><a class="nav-link" href="<?//php echo base_url('admin/Data_peta') ?>"><i class="fas fa-map"></i> <span>Data Peta</span></a></li> -->
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_tugas') ?>"><i class="fas fa-list"></i> <span>Data Tugas</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_informasi') ?>"><i class="fas fa-info"></i> <span>Data Informasi</span></a></li>

            <li class="menu-header">Setting</li>
            <li><a class="nav-link" href="<?php echo base_url('admin/Data_konfigurasi') ?>"><i class="fas fa-cog"></i> <span>Konfigurasi</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('Auth/ganti_password') ?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li>
            <li><a onclick="return confirm('Yakin Ingin Keluar ?')" class="nav-link" href="<?php echo base_url('Auth/logout') ?>"><i class="fas fa-sign-out-alt text-danger"></i> <span class="text-danger">Logout</span></a></li>
          </ul>

        </aside>
      </div>