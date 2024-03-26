<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
    <p class="mb-4">Tambah Data Pegawai Baru</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between ">
                <h5 class="m-0 font-weight-bold ">Data Pegawai</h5>
                <a href="#" class=" btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pegawai</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $pg) : ?>
                            <tr>

                                <td><?= $no++ ?></td>
                                <td style="text-align: center;"> <img src="<?= base_url('assets/'); ?>barang/<?php echo $pg->gambar_brg ?>" alt="barang" width="100px" height="100px"></td>
                                <td><?= $pg->nama_pegawai ?></td>
                                <td><?= $pg->jabatan ?></td>

                                <td class="text-center">

                                    <a class="btn btn-danger mx-2 " href="#modal-hapus" onclick="$('#modal-hapus #form_delete').attr('action', 
                                         '<?= site_url('Admin/C_data_pegawai/hapus/' . $pg->id_pegawai); ?>')" data-toggle="modal">
                                        <i class="fas fa-trash fa-sm text-white-50"></i>
                                    </a>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/C_data_pegawai/Tambah_pegawai'); ?>
                <form action="<?php echo base_url('admin/C_data_pegawai/Tambah_barang'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="basic-url">Nama Pegawai</label>
                        <div class="input-group">
                            <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Nama Pegawai" name="nama_pg">
                        </div>
                        <?= form_error('nama_pg', '<small class="text-danger">', '</small> '); ?>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan">Jabatan</label>
                        <div class="input-group">
                            <select class="form-control" name="jabatan" id="jabatan">
                                <option value="pilih">Pilih Jabatan</option>
                                <option value="baby sister">Baby Sister</option>
                                <option value="Cukur Rambut">Cukur Rambut</option>
                                <option value="Pijat">Pijat</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <?= form_error('jabatan', '<small class="text-danger">', '</small> '); ?>
                    </div>
                    <div class="mb-3">
                        <label for="gambar">Foto Formal</label>
                        <div class="custom-file ">
                            <input type="file" name="gambar" class="custom-file-input <?= (form_error('gambar')) ? 'is-invalid' : ''; ?>" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Pilih Foto Profil</label>
                            <?= form_error('gambar', '<small class="text-danger">', '</small> '); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar">Foto Gaya</label>
                        <div class="custom-file">
                            <input type="file" name="gambar_gaya" class="custom-file-input <?= (form_error('gambar_gaya')) ? 'is-invalid' : ''; ?>" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Pilih Foto Gaya</label>
                            <?= form_error('gambar_gaya', '<small class="text-danger">', '</small> '); ?>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>