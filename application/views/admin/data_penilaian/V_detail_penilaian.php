<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Penilaian</h1>
    <p class="mb-4">Riwayat Penilai Oleh Pembeli </p>


    <div class="alert alert-primary" role="alert">
        <div class="d-sm-flex align-items-center justify-content-between ">
            Pegawai atasa nama
            <?php foreach ($pegawai as $pg) : ?>
                <?= $pg->nama_pegawai; ?>

                Jabatan sebagai <?= $pg->jabatan; ?>
            <?php endforeach; ?>
            <a href="<?php echo base_url('admin/C_penilaian') ?>" class=" btn btn-sm btn-light rounded-circle "><i class="fas fa-arrow-left text-primary"></i></a>
        </div>

    </div>

    <div class="row">
        <?php foreach ($detail as $dl) : ?>

            <div class="col-12 col-lg-6 col-sm-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $dl->nama; ?></h6>
                        <div class="dropdown no-arrow">
                            <a href="#">
                                <i class="fas fa-star text-warning"></i> <?= $dl->nilai; ?>
                            </a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        Tanggal <?= $dl->tanggal; ?><br>
                        <?= $dl->komentar; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- Modal -->
<div class="modal  fade" id="uraian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/C_isi_rab/Tambah_uraian'); ?>" method="POST">
                    <?php foreach ($rab as $rb) : ?>
                        <input type="hidden" class="form-control" name="id_rab" value="<?php echo $rb->id_rab; ?>">
                    <?php endforeach; ?>
                    <div class="mb-3">
                        <label for="basic-url">Uraian</label>
                        <div class="input-group">
                            <input type="text" id="basic-url" class="form-control <?= (form_error('uraian')) ? 'is-invalid' : ''; ?>" name="uraian">
                        </div>
                        <?= form_error('uraian', '<small class="text-danger">', '</small> '); ?>
                    </div>


                    <div class="mb-3">
                        <label for="basic-url">Tanggal Kebutuhan</label>
                        <div class="input-group">
                            <input type="date" id="basic-url" class="form-control <?= (form_error('tgl')) ? 'is-invalid' : ''; ?>" name="tgl">
                        </div>
                        <?= form_error('tgl', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">Jumlah</label>
                        <div class="input-group">
                            <input type="text" id="basic-url" class="form-control <?= (form_error('jumlah')) ? 'is-invalid' : ''; ?>" name="jumlah">
                        </div>
                        <?= form_error('jumlah', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">Satuan</label>
                        <div class="input-group">

                            <select name="satuan" class="selectpicker form-control <?= (form_error('satuan')) ? 'is-invalid' : ''; ?>" data-live-search="true">
                                <option value="Kosong">Kosong</option>
                                <?php foreach ($satuan as $st) : ?>
                                    <option value="<?= $st->nama_satuan ?>"><?= $st->nama_satuan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('id_buyer', '<small class="text-danger">', '</small> '); ?>
                    </div>



                    <div class="mb-3">
                        <label for="basic-url">Periode</label>
                        <div class="input-group">
                            <input type="text" id="basic-url" class="form-control <?= (form_error('periode')) ? 'is-invalid' : ''; ?>" name="periode">
                        </div>
                        <?= form_error('periode', '<small class="text-danger">', '</small> '); ?>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal  fade" id="barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/C_isi_rab/Tambah_uraian'); ?>" method="POST">
                    <?php foreach ($rab as $rb) : ?>
                        <input type="hidden" class="form-control" name="id_rab" value="<?php echo $rb->id_rab; ?>">
                    <?php endforeach; ?>
                    <div class="mb-3">
                        <label for="basic-url">Uraian</label>
                        <div class="input-group">
                            <input type="text" id="basic-url" class="form-control <?= (form_error('uraian')) ? 'is-invalid' : ''; ?>" name="uraian">
                        </div>
                        <?= form_error('uraian', '<small class="text-danger">', '</small> '); ?>
                    </div>


                    <div class="mb-3">
                        <label for="basic-url">Tanggal Kebutuhan</label>
                        <div class="input-group">
                            <input type="date" id="basic-url" class="form-control <?= (form_error('tgl')) ? 'is-invalid' : ''; ?>" name="tgl">
                        </div>
                        <?= form_error('tgl', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">Jumlah</label>
                        <div class="input-group">
                            <input type="text" id="basic-url" class="form-control <?= (form_error('jumlah')) ? 'is-invalid' : ''; ?>" name="jumlah">
                        </div>
                        <?= form_error('jumlah', '<small class="text-danger">', '</small> '); ?>
                    </div>

                    <div class="mb-3">
                        <label for="basic-url">Satuan</label>
                        <div class="input-group">

                            <select name="satuan" class="selectpicker form-control <?= (form_error('satuan')) ? 'is-invalid' : ''; ?>" data-live-search="true">
                                <option value="Kosong">Kosong</option>
                                <?php foreach ($satuan as $st) : ?>
                                    <option value="<?= $st->nama_satuan ?>"><?= $st->nama_satuan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('id_buyer', '<small class="text-danger">', '</small> '); ?>
                    </div>



                    <div class="mb-3">
                        <label for="basic-url">Periode</label>
                        <div class="input-group">
                            <input type="text" id="basic-url" class="form-control <?= (form_error('periode')) ? 'is-invalid' : ''; ?>" name="periode">
                        </div>
                        <?= form_error('periode', '<small class="text-danger">', '</small> '); ?>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- <div class="col-12 col-lg-5 col-sm-12">
             <div class="card shadow mb-4">
                <div class="card-header ">
                    Tambah Barang
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/C_isi_rab/Tambah_barang'); ?>" method="POST">

                    <?php foreach ($rab as $rb) : ?>
                            <input type="hidden" class="form-control" name="id_rab" value="<?php echo $rb->id_rab; ?>">
                        <?php endforeach; ?>

                        <div class="mb-3">
                            <label for="basic-url">Nama Barang</label>
                            <select name="id_brg" class="selectpicker form-control <?= (form_error('id_brg')) ? 'is-invalid' : ''; ?>" data-live-search="true">
                                <option value="Pilih">Pilih Barang</option>
                                <?php foreach ($barang as $br) : ?>
                                    <option value="<?= $br->id_barang ?>"><?= $br->nama_barang ?> (<?= $br->jumlah ?> <?= $br->satuan ?>)</option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('id_brg', '<small class="text-danger">', '</small> '); ?>
                        </div>

                        <div class="mb-3">
                            <label for="basic-url">Jumlah</label>
                            <div class="input-group">
                                <input type="number" name="jml_brg" class="form-control <?= (form_error('jml_brg')) ? 'is-invalid' : ''; ?>" name="tgl">
                            </div>
                            <?= form_error('jml_brg', '<small class="text-danger">', '</small> '); ?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Tambah Barang</button>
                </div>
            </div>
    </div>
    </form> -->