<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Berita</h1>
        </div>
    </section>
    <div class="card-body">
        <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <div class="table-responsive">
            <div id="table_data_berita_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?php echo base_url('admin/Data_berita/tambah_berita') ?>" class="btn btn-primary mb-3 float-left mr-3">Tambah berita</a>
                        <table class="table table-striped dataTable no-footer display" id="table_data_berita" role="grid" aria-describedby="table_data_berita_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting" tabindex="0" aria-controls="table_data_berita"  style="width:20px;" aria-label="#: activate to sort column ascending">
                                        No
                                    </th>
                                    <th class="sorting" >Judul</th>
                                    <th class="sorting" >Isi Singkat</th>
                                    <th class="sorting" >Gambar</th>
                                    <th class="sorting"  style="width: 30px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($berita as $br) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $br->judul; ?></td>
                                        <td><?= $br->isi_singkat; ?></td>
                                        <td><?= $br->gambar; ?></td>
                                        <td>
                                            <div class="row">
                                                <a href="<?php echo base_url('admin/Data_berita/edit_berita/') . $br->id ?>" class="btn btn-sm btn-warning mr-2 ml-2"><i class="fas fa-pencil-ruler"></i></a>
                                                <a onclick="return confirm('Yakin Ingin Hapus Berita Ini ?')" href="<?php echo base_url('admin/Data_berita/hapus_berita/') . $br->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>