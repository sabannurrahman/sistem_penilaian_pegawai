<?php if (validation_errors()) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'error',
            text: 'Gagal Ditambahkan!',
            showConfirmButton: false,
            timer: 1000
        })
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('berhasil')) : ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'success',
            text: 'Berhasil',
            showConfirmButton: false,
            timer: 1000
        })
    </script>
<?php endif;  ?>



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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>