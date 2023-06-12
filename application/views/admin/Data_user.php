<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data user</h1>
        </div>
    </section>
    <div class="card-body">
        <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <div class="table-responsive">
            <div id="table_data_user_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?php echo base_url('admin/Data_user/tambah_user') ?>" class="btn btn-primary mb-3 float-left mr-3">Tambah user</a>
                        <table class="table table-striped dataTable no-footer display" id="table_data_user" role="grid" aria-describedby="table_data_user_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting" tabindex="0" aria-controls="table_data_user"  style="width:20px;" aria-label="#: activate to sort column ascending">
                                        No
                                    </th>
                                    <th class="sorting" >Username</th>
                                    <th class="sorting" >Jenis User</th>
                                    <th class="sorting" style="width: 150px;">Password</th>
                                    <th class="sorting"  style="width: 30px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $us) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $us->username; ?></td>
                                        <td><?= $us->role_id == 1 ? 'Admin' : 'Pengisi Berita'; ?></td>
                                        <td>
                                            <a href="<?= base_url('Auth/reset_password/').$us->id ?>" class="btn btn-sm btn-primary" onclick="return confirm('Yakin Ingin Reset Password pegawai Ini ke 123456 ?')">
                                                Reset Password
                                            </a>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <a href="<?php echo base_url('admin/Data_user/edit_user/') . $us->id ?>" class="btn btn-sm btn-warning mr-2 ml-2"><i class="fas fa-pencil-ruler"></i></a>
                                                <a onclick="return confirm('Yakin Ingin Hapus User Ini ?')" href="<?php echo base_url('admin/Data_user/hapus_user/') . $us->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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