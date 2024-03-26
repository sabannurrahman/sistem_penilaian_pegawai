<body style="background-color: #ffbcbc;background-image:url('<?php echo base_url('assets/gambar/'); ?>logo2.png'); background-repeat: no-repeat; background-size:50%; background-position: center;background-attachment: fixed;">

    <div class="row" style="background-color: #ea6464;">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-2 col-xl-2 col-sm-2 ">
            <img src="<?php echo base_url('assets/gambar/'); ?>logo.png" class="w-100 img-fluid " alt="logo">
        </div>
        <div class="col-8 col-xl-8 col-sm-8 mt-5 ">
            <H1 class=" text-white display-5  mt-xl-5" style="font-weight: bold;">BEE SALON & FAMILY SPA</H1>
        </div>
        <div class="col-2 col-xl-1 col-sm-2 mt-5 ">
            <a href="<?= base_url('C_login'); ?>" class="btn btn-light btn-lg rounded-circle mt-xl-5"> <i class="fas fa-lock" style="color: #ea6464;"></i></a>
        </div>

    </div>
    <div class=" container">
        <h3 class="text-center font-weight-bold mt-4" style="color: #7f2323;">Input Nama Anda di bawah ini</h3>

        <div class="row justify-content-center my-4">
            <div class="col-12 col-xl-8 col-md-10">
                <div class="card mt-4 shadow  ">
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/C_review/Tambah_nama'); ?>" method="post">
                            <input type="text" class="form-control" name="nama">
                            <button type="submit" class="btn btn-primary mt-3"> Berikutnya</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>