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
                        <form method="POST" action="<?= base_url() ?>pembayaran/add_pembayaran" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php
                                $user = $this->session->userdata('server_spp');

                                $id_spp = $user['id_petugas'];
                                ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Siswa</label>
                                    <input type="text" value="<?= $siswa->nama; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NISN</label>
                                    <input type="text" value="<?= $siswa->nisn; ?>" name="nisn" id="nisn" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIS</label>
                                    <input type="text" value="<?= $siswa->nis; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kelas</label>
                                    <input type="text" value="<?= $siswa->nama_kelas; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nominal</label>
                                    <input type="hidden" name="id_spp" id="id_spp" value="<?= $siswa->id_spp; ?>">
                                    <input type="text" value="Rp.<?= number_format($siswa->nominal, 0, ',', ','); ?>" name="nominal" id="nominal" class="form-control" readonly>
                                    <input type="hidden" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bulan</label>
                                    <select name="bulan" id="bulan" class="form-control">
                                        <option class="d-none">Pilih Bulan</option>
                                        <option>Januari</option>
                                        <option>Febbuari</option>
                                        <option>Maret</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>September</option>
                                        <option>Oktober</option>
                                        <option>November</option>
                                        <option>Desember</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tahun</label>
                                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun" maxlength="4">
                                </div>
                                <div class="form-group">
                                    <label>Tarif</label>
                                    <input type="text" name="tarif" id="tarif" class="form-control" placeholder="Tarif">
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