<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Pelanggan</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo.png">
    <style type="text/css">
        .head {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        .body {
            border-collapse: collapse;
            border: 1px;
            border-color: black;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <center>
        <table class="head" width="625">
            <tr>
                <td>
                    <center>
                        <font size="5"><b>ZAYN INTERIOR</b></font><br>
                        <font size="2">Alamat : Gang Mawar Desa Kelawat Kec. Sei Lala Kab. Inhu Riau</font><br>
                        <font size="2"><i>Email : zayninterior@gmail.com Kode Pos : 29363 Telp./Fax (0822) 8324 3272</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <table width="625" class="head">
                <tr>
                    <td class="text2">Inhu, <?= date("d M Y"); ?></td>
                </tr>
            </table>
        </table>
        <table class="head" style="margin-bottom: 20px;">
            <tr>
                <td>Laporan Data Pelanggan</td>
            </tr>
        </table>
        <table border="1" class="body" width="625">
            <thead>
                <tr style="height: 25px;">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Hp</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($pelanggan as $row) : $no++ ?>
                    <tr style="height: 20px; text-align: center;">
                        <td> <?= $no; ?></td>
                        <td> <?= $row['pelanggan_nama']; ?></td>
                        <td>
                            <?php if ($row['pelanggan_jenkel'] == 1) { ?>
                                Laki-Laki
                            <?php } else { ?>
                                Perempuan
                            <?php } ?>
                        </td>
                        <td> <?= $row['pelanggan_alamat']; ?></td>
                        <td> <?= $row['pelanggan_nohp']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table width="625" style="margin-top: 30px;">
            <tr style="text-align: right !important;">
                <td>Inhu, <?= date("d M Y"); ?></td>
            </tr>
            <tr style="text-align: right !important;">
                <td>Pimpinan Zayn Interior</td>
            </tr>
            <tr style="text-align: right !important; height: 120px;">
                <td>(...................................)</td>
            </tr>
        </table>
    </center>
</body>

<script>
    window.print();
</script>

</html>