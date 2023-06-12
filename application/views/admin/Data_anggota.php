<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data anggota</h1>
        </div>
    </section>
    <div class="card-body">
        <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <div class="table-responsive">
            <div id="table_data_anggota_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?php echo base_url('admin/Data_anggota/tambah_anggota') ?>" class="btn btn-primary mb-3 float-left mr-3">Tambah anggota</a>
                        <table class="table table-striped dataTable no-footer display" id="table_data_anggota" role="grid" aria-describedby="table_data_anggota_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting" tabindex="0" aria-controls="table_data_anggota"  style="width:20px;" aria-label="#: activate to sort column ascending">
                                        No
                                    </th>
                                    <th class="sorting" >Nama</th>
                                    <th class="sorting" >Jabatan</th>
                                    <th class="sorting"  style="width: 30px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($anggota as $us) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $us->nama; ?></td>
                                        <td><?= $us->jabatan; ?></td>
                                        <td>
                                            <div class="row">
                                                <a href="<?php echo base_url('admin/Data_anggota/edit_anggota/') . $us->id ?>" class="btn btn-sm btn-warning mr-2 ml-2"><i class="fas fa-pencil-ruler"></i></a>
                                                <a onclick="return confirm('Yakin Ingin Hapus Anggota Ini ?')" href="<?php echo base_url('admin/Data_anggota/hapus_anggota/') . $us->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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