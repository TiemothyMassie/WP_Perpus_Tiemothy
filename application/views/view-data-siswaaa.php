<html>

<head>
    <title>Tampil Data Siswa</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/data-siswa.css">
</head>

<body>
    <div class="container">
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Nama Siswa </td>
                    <td> : </td>
                    <td>
                        <?= $siswa; ?>
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <?= $nis; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <?= $kelas; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $tanggal; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $tempat; ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?= $kelamin; ?>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <?= $agama; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('DataSiswa'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</body>

</html>