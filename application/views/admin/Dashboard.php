<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
    <div class="row">
      <div class="col-md-6">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
            </div>
            <H6>Total Berita</H6>
            <div class="card-body">
              <?= $total_berita ?> Berita
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
</div>