<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Penilaian</h1>
    <p class="mb-4">Data Penilaian Pegawai Dari Review Pembeli</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between ">
                <h5 class="m-0 font-weight-bold ">Data Penilaian</h5>
                <a class="btn btn-danger mx-2 " href="#modal-hapus" onclick="$('#modal-hapus #form_delete').attr('action', 
                    '<?= site_url('Admin/C_penilaian/hapus'); ?>')" data-toggle="modal">
                    <i class="fas fa-trash fa-sm text-white-50"></i> Reset Penilaian
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th><i class="fas text-warning fa-reguler fa-star"></i>1</th>
                            <th><i class="fas text-warning fa-reguler fa-star"></i>2</th>
                            <th><i class="fas text-warning fa-reguler fa-star"></i>3</th>
                            <th><i class="fas text-warning fa-reguler fa-star"></i>4</th>
                            <th><i class="fas text-warning fa-reguler fa-star"></i>5</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $pg) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <!-- <td><? //= tgl_indo($pn->tanggal_po); 
                                            ?></td> -->
                                <td><?= $pg->nama_pegawai; ?></td>
                                <td>
                                    <?php
                                    $totalRating1 = 0;
                                    $totalRating2 = 0;
                                    $totalRating3 = 0;
                                    $totalRating4 = 0;
                                    $totalRating5 = 0;

                                    // Hitung total rating per bintang
                                    foreach ($penilaian as $pl) {
                                        if ($pl->nilai == 1 && $pl->id_pegawai == $pg->id_pegawai) {
                                            $totalRating1++;
                                        }
                                        if ($pl->nilai == 2 && $pl->id_pegawai == $pg->id_pegawai) {
                                            $totalRating2++;
                                        }
                                        if ($pl->nilai == 3 && $pl->id_pegawai == $pg->id_pegawai) {
                                            $totalRating3++;
                                        }
                                        if ($pl->nilai == 4 && $pl->id_pegawai == $pg->id_pegawai) {
                                            $totalRating4++;
                                        }
                                        if ($pl->nilai == 5 && $pl->id_pegawai == $pg->id_pegawai) {
                                            $totalRating5++;
                                        }
                                    }
                                    echo $totalRating1;
                                    $b5 =  5 * $totalRating5;
                                    $b4 = 4 * $totalRating4;
                                    $b3 = 3 * $totalRating3;
                                    $b2 = 2 * $totalRating2;
                                    $b1 = 1 * $totalRating1;
                                    $jum = $totalRating5 + $totalRating4 + $totalRating3 + $totalRating2 + $totalRating1;
                                    if ($jum > 0) {
                                        $hasil2 = ($b1 + $b2 + $b3 + $b4 + $b5) / $jum;
                                        $hasil = round($hasil2, 1);
                                    } else {
                                        // Jika jumlah ulasan nol, atur rating produk menjadi nol
                                        $hasil = 0;
                                    }
                                    ?>
                                </td>
                                <td><?= $totalRating2; ?></td>
                                <td><?= $totalRating3; ?></td>
                                <td><?= $totalRating4; ?></td>
                                <td><?= $totalRating5; ?></td>
                                <td><i class="fas text-warning fa-reguler fa-star"></i> <?= $hasil; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/C_penilaian/Detail/') . $pg->id_pegawai ?>" class="btn btn-primary "><i class="fas fa-link fa-sm text-white-50"></i></a>
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