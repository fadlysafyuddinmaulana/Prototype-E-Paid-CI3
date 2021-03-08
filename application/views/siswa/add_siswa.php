<div class="content-wrapper" <!-- Content Header (Page header) -->
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
                        <form method="post" action="<?= base_url() ?>siswa/proses_siswa" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="text" autocomplete="off" name="nisn" id="nisn" class="form-control" maxlength="10">
                                </div>
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="text" autocomplete="off" name="nis" id="nis" class="form-control" maxlength="8">
                                </div>
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" name="nama" id="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select class="form-control select2" name="kelas" id="kelas" style="width: 100%;">
                                        <?php foreach ($kelas as $key => $value) : ?>
                                            <option value="<?= $value->id_kelas; ?>"><?= $value->nama_kelas; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SPP</label>
                                    <select class="form-control select2" name="spp" id="spp" style="width: 100%;">
                                        <?php foreach ($spp as $key => $value) : ?>
                                            <option value="<?= $value->id_spp; ?>">Rp.<?= number_format($value->nominal, 0, ',', ','); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" rows="5" cols="5" style="resize: none;" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>No. Telp</label>
                                    <input type="text" name="no_telp" id="no_telp" class="form-control" maxlength="13">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>