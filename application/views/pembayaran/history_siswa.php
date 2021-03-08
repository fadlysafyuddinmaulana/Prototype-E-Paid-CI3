<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <h1 class="m-0 text-dark">Data Pembayaran</h1>
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
                                        <th class="text-center" width="5%">No</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">NIS</th>
                                        <th class="text-center">Nama Petugas</th>
                                        <th class="text-center">Kelas</th>
                                        <th class="text-center">Nominal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($siswa as $key => $value) : ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $no++ ?>
                                            </td>
                                            <td>
                                                <strong><?= $value->nama ?></strong>
                                            </td>
                                            <td>
                                                <strong><?= $value->nis ?></strong>
                                            </td>
                                            <td>
                                                <strong><?= $value->nama_petugas ?></strong>
                                            </td>
                                            <td>
                                                <strong><?= $value->nama_kelas ?></strong>
                                            </td>
                                            <td>
                                                <strong>Rp.<?= number_format($value->nominal, 0, ',', ',') ?></strong>
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