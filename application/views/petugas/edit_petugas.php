<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url() ?>petugas/proses_edit_petugas" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="hidden" value="<?= $petugas->id_petugas; ?>" name="idp" id="idp" class="form-control">
                                    <input type="text" autocomplete="off" value="<?= $petugas->username; ?>" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Passowrd</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama Petugas</label>
                                    <input type="text" autocomplete="off" value="<?= $petugas->nama_petugas; ?>" name="nama_petugas" id="nama_petugas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Akses</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="<?= $petugas->level; ?>" class="d-none"><?= $petugas->level; ?></option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->