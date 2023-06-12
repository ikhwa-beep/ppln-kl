<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Informasi</h1>
        </div>
    </section>
    <div class="card-body">
        <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <div class="table-responsive">
            <div id="table_data_informasi_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?php echo base_url('admin/Data_informasi/tambah_informasi') ?>" class="btn btn-primary mb-3 float-left mr-3">Tambah informasi</a>
                        <table class="table table-striped dataTable no-footer display" id="table_data_informasi" role="grid" aria-describedby="table_data_informasi_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting" tabindex="0" aria-controls="table_data_informasi"  style="width:20px;" aria-label="#: activate to sort column ascending">
                                        No
                                    </th>
                                    <th class="sorting" >judul</th>
                                    <th class="sorting" >Isi Informasi</th>
                                    <th class="sorting"  style="width: 30px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($informasi as $us) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $us->judul; ?></td>
                                        <td><?= $us->isi; ?></td>
                                        <td>
                                            <div class="row">
                                                <a href="<?php echo base_url('admin/Data_informasi/edit_informasi/') . $us->id ?>" class="btn btn-sm btn-warning mr-2 ml-2"><i class="fas fa-pencil-ruler"></i></a>
                                                <a onclick="return confirm('Yakin Ingin Hapus informasi Ini ?')" href="<?php echo base_url('admin/Data_informasi/hapus_informasi/') . $us->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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