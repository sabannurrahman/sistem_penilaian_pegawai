<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">


    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css">
    <script src="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url('assets/bintang/') ?>review.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Form Reviews</title>

</head>

<body style="background-color: #ffbcbc;background-image:url('<?php echo base_url('assets/gambar/'); ?>logo2.png'); background-repeat: no-repeat; background-size:50%; background-position: center;background-attachment: fixed; margin:0;padding:0;">

    <div class="row">
        <?php foreach ($pegawai as $pg) : ?>
            <div class="col-12 col-xl-6 col-md-6 col-sm 12 p-0 mb-0">
                <img data-aos="fade-up" class="img-fluid w-100 m-0" src="<?= base_url('assets/barang/') ?><?= $pg->gambar_profile; ?>" alt="">
            </div>
            <div class="col-12 col-xl-6 col-md-6 col-sm 12">
                <h1 class="text-center display-5 font-weight-bold mt-5" style="color:#7f2323"><?= $pg->nama_pegawai; ?></h1>
                <h4 class="text-center mb-3" style="color:#7f2323"><?= $pg->jabatan; ?></h4>
                <div data-aos="fade-up" class="wrapper">
                    <h3>Berikan Bintang dan Review Pribadimu</h3>
                    <form action="<?php echo base_url('admin/C_review/Tambah'); ?>" method="POST">
                        <input type="hidden" name="nama" value="<?= $nama ?>">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="tanggal" value="<?= date('Y-m-d'); ?>">

                        <div class="rating">
                            <input type="number" name="rating" hidden>
                            <i class='bx bx-star star' style="--i: 0;"></i>
                            <i class='bx bx-star star' style="--i: 1;"></i>
                            <i class='bx bx-star star' style="--i: 2;"></i>
                            <i class='bx bx-star star' style="--i: 3;"></i>
                            <i class='bx bx-star star' style="--i: 4;"></i>
                        </div>
                        <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."></textarea>
                        <div class="btn-group">
                            <button type="submit" class="btn submit">Submit</button>
                            <a href="<?php echo base_url('admin/C_review'); ?>" class="btn cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <link rel="stylesheet" href="<?php echo base_url('assets/bintang/'); ?>review.css">






    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- datatables -->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url('assets/dashboardTemp/'); ?>js/demo/datatables-demo.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <script src="<?php echo base_url('assets/bintang/'); ?>review.js"></script>



    <script src="<?php echo base_url('assets/bintang/'); ?>review.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>