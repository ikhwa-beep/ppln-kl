<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pertanyaan</h1>
        </div>
    </section>
    <div class="card-body">
        <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <div class="table-responsive">
            <div id="table_data_pertanyaan_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?php echo base_url('admin/Data_pertanyaan/tambah_pertanyaan') ?>" class="btn btn-primary mb-3 float-left mr-3">Tambah pertanyaan</a>
                        <table class="table table-striped dataTable no-footer display" id="table_data_pertanyaan" role="grid" aria-describedby="table_data_pertanyaan_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting" tabindex="0" aria-controls="table_data_pertanyaan"  style="width:20px;" aria-label="#: activate to sort column ascending">
                                        No
                                    </th>
                                    <th class="sorting" >Pertanyaan</th>
                                    <th class="sorting" >Jawaban</th>
                                    <th class="sorting"  style="width: 30px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pertanyaan as $us) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $us->pertanyaan; ?></td>
                                        <td><?= $us->jawaban; ?></td>
                                        <td>
                                            <div class="row">
                                                <a href="<?php echo base_url('admin/Data_pertanyaan/edit_pertanyaan/') . $us->id ?>" class="btn btn-sm btn-warning mr-2 ml-2"><i class="fas fa-pencil-ruler"></i></a>
                                                <a onclick="return confirm('Yakin Ingin Hapus pertanyaan Ini ?')" href="<?php echo base_url('admin/Data_pertanyaan/hapus_pertanyaan/') . $us->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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