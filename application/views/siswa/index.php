<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <h1 class="m-0 text-dark">List Siswa</h1>
                </div>
                <div class="ml-auto">
                    <a href="<?= base_url() ?>add-siswa" class="btn text-white mb-4 btn-effect-ripple btn-primary"><i class="fas fa-plus"></i> Tambah Siswa</a>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class=" card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">NISN</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">NIS</th>
                                        <th class="text-center">Kelas</th>
                                        <th class="text-center">Nominal</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($siswa as $key => $value) : ?>
                                        <tr>
                                            <td>
                                                <strong><?= $value->nisn ?></strong>
                                            </td>
                                            <td>
                                                <strong><?= $value->nama ?></strong>
                                            </td>
                                            <td>
                                                <strong><?= $value->nis ?></strong>
                                            </td>
                                            <td class="text-center">
                                                <strong><?= $value->nama_kelas ?></strong>
                                            </td>
                                            <td class="text-center">
                                                <strong>Rp.<?= number_format($value->nominal, 0, ',', ','); ?></strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= base_url('edit-siswa/' . $value->nisn) ?>" class="btn text-light btn-effect-ripple btn-s btn-warning"><i class="fa fa-pen"></i></a>
                                                <a href="<?= base_url('delete-siswa/' . $value->nisn) ?>" class="btn text-light btn-effect-ripple btn-s btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
</div>