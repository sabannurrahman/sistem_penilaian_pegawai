<body data-aos="fade-down" style="background-color: #ffbcbc;background-image:url('<?php echo base_url('assets/gambar/'); ?>logo2.png'); background-repeat: no-repeat; background-size:50%; background-position: center;background-attachment: fixed;">


    <div class="row" style="background-color: #ea6464;">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-2 col-xl-2 col-sm-2 ">
            <img src="<?php echo base_url('assets/gambar/'); ?>logo.png" class="w-100 img-fluid " alt="logo">
        </div>
        <div class="col-10 col-xl-10 col-sm-10 mt-5 ">
            <H1 class=" text-white display-4  mt-xl-4" style="font-weight: bold;">BEE SALON & FAMILY SPA</H1>
        </div>
    </div>
    <div class="container">

        <h2 class="text-center font-weight-bold my-4" style="color: #7f2323;">Silahkan pilih Therapist yang ingin di beri Penilaian</h2>
        <div class="row justify-content-center mb-3">

            <?php foreach ($pegawai as $pg) : ?>
                <div class="col-6 col-md-3 col-sm-6">
                    <div class="card mt-4 bg-transparent border-0">
                        <a href="<?= base_url('Admin/C_review/bintang/' . $nama . '/' . $pg->id_pegawai); ?>">
                            <div class="card-body">
                                <img class="img-fluid rounded-circle shadow border border-5 border-light" style="background-color:#ea6464" src="<?= base_url('assets/barang/'); ?><?= $pg->gambar_brg;  ?>  " alt="">
                            </div>
                        </a>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>