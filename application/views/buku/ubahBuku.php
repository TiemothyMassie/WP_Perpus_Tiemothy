    <div class="container-fluid">
    <?php foreach ($buku as $b) { ?>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Ubah Buku</h4>
                        
                        <form action="<?= base_url('buku/ubahBuku'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $b['id'] ?>">
                            <input type="hidden" name="old_pict" value="<?= $b['image'] ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="judul_buku" value="<?= $b['judul_buku']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Kategori</label>
                                <select name="id_kategori" class="form-control form-control-user">
                                    <option value="<?= $b['id_kategori'] ?>"> <?php 
                                                                                    if ($b['id_kategori'] == 1) {
                                                                                        echo "Komputer";
                                                                                    } elseif ($b['id_kategori'] == 2) {
                                                                                        echo "Bahasa";
                                                                                    } elseif ($b['id_kategori'] == 3) {
                                                                                        echo "Sains";
                                                                                    } elseif ($b['id_kategori'] == 4) {
                                                                                        echo "Hobby";
                                                                                    } elseif ($b['id_kategori'] == 5) {
                                                                                        echo "Komunikasi";
                                                                                    } elseif ($b['id_kategori'] == 6) {
                                                                                        echo "Hukum";
                                                                                    } elseif ($b['id_kategori'] == 7) {
                                                                                        echo "Agama";
                                                                                    } elseif ($b['id_kategori'] == 8) {
                                                                                        echo "Populer";
                                                                                    } elseif ($b['id_kategori'] == 9) {
                                                                                        echo "Komik";
                                                                                    };
                                                                                ?>
                                    </option>
                                    <?php foreach ($kategori as $k) : ?>
                                        <option value="<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Pengarang</label>
                                <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" value="<?= $b['pengarang'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Penerbit</label>
                                <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" value="<?= $b['penerbit'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Tahun Terbit</label>
                                <select name="tahun" class="form-control form-control-user">
                                    <option value="<?= $b['tahun_terbit'] ?>"><?= $b['tahun_terbit']  ?></option>
                                    <?php
                                    for ($i = date('Y'); $i > 1000; $i--) { ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option> <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">ISBN</label>
                                <input type="text" class="form-control form-control-user" id="isbn" name="isbn" value="<?= $b['isbn'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Stok</label>
                                <input type="text" class="form-control form-control-user" id="stok" name="stok" value="<?= $b['stok'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Gambar</label>
                                <input type="file" class="form-control form-control-user" id="image" name="image">
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary mr-2"> Simpan </button>
                                <button class="btn btn-light" onclick="goBack()">Batal</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->