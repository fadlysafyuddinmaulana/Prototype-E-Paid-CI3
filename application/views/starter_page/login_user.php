<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h2 class="h2"><b><?= $title; ?></b></h2>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?= base_url() ?>Auth/proses_siswa" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan nis anda">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->