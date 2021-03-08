<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $tanggal    = date('dmy');
    $waktu      = date('Hi');
    ?>
    <title>Laporan_SPP<?= $tanggal; ?><?= $waktu; ?></head><style>
        table{
            position: relative;
            margin-left: -15px;
            width: 100%;
            border: 1px black;
            border-collapse: collapse;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        table th {
            padding: 5px 20px;
            color:black;
            border: 1px solid black;
            white-space: nowrap;
            font-weight: normal;
            background-color: lightblue;
        }

        table tr,td{
            padding: 5px;
            font-size: 11px;
            border: 1px solid black;
            background-color: #eaeaea;
        }
    </style><body><h1 style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Laporan SPP SMK A</h1>
    <table><tr>
            <th>Kode Pembayaran</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Nama Petugas</th>
            <th>Kelas</th>
            <th>Tahun</th>
            <th>Tunai</th>
            <th>Nominal</th>
        </tr><?php foreach ($spp as $key => $value) : ?><tr>
                <td><?= $value->id_pembayaran; ?></td>
                <td><?= $value->nis; ?></td>
                <td width="25%"><?= $value->nama; ?></td>
                <td><?= $value->nama_petugas; ?></td>
                <td><?= $value->nama_kelas; ?></td>
                <td><?= $value->tahun; ?></td>
                <td>Rp.<?= number_format($value->jumlah_bayar,0,',',','); ?></td>
                <td>Rp.<?= number_format($value->nominal,0,',',','); ?></td>
                </tr><?php endforeach; ?></table></body></html>