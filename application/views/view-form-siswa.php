<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama">
                        <?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="number" name="nis">
                        <?= form_error('nis', '<br><span style="color:red;">', '</span>'); ?>
                    </td>

                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" id="laki-laki" name="kelamin" value="Laki-Laki">Laki-laki
                        <input type="radio" id="Perempuan" name="kelamin" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>