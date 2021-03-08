</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/select2/js/select2.full.min.js"></script>

<!-- script-page -->
<script type="text/javascript">
    $(function() {
        $('#datetimepicker4').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>

<script>
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
    $('.select2').select2();
</script>

<script>
    $(function() {
        $("#example1").DataTable({
            responsive: true,
            autoWidth: false,
            lengthMenu: [
                [25, 50, 100, -1],
                [25, 50, 100, "All"],
            ],
            scrollY: "400px",
            // "ordering":true,
            // "columnDefs":[{
            //   "targets":[0],
            //   "orderable":true
            // }]
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
</body>

</html>