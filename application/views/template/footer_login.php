    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/dist/js/adminlte.min.js"></script>
    <!-- jquery-validation -->
    <script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>assets/AdminLTE-3.1.0-rc/plugins/jquery-validation/additional-methods.min.js"></script>

    <!-- script-page -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#form-validation').validate({
                rules: {
                    'val-nik': {
                        required: true,
                        number: true
                    },
                    'val-cellphone': {
                        required: true,
                        number: true
                    },
                    'val-username': {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    'val-nik': {
                        required: "Masukkan NIK anda!",
                        number: "Harus Menggunakan Angka!"
                    },
                    'val-cellphone': {
                        required: "Masukkan Nomor anda!",
                        number: "Harus Menggunakan Angka!"
                    },
                    'val-username': {
                        required: "Masukkan username anda!",
                        minlength: "Karakter harus lebih dari 3"
                    },
                    terms: "Anda harus mencentang terlebih dahulu"
                }
            });
        });
    </script>
    </body>

    </html>