    <div class="container-fluid">
            <?php foreach ($kategori as $k) { ?>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Ubah Kategori</h4>
                                <form action="<?= base_url('buku/ubahKategori'); ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_kategori" value="<?= $k['id_kategori']; ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="kategori" value="<?= $k['kategori']; ?>" required>
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