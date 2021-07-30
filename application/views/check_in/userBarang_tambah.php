<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <img src="<?= base_url('assets/barang/') . $barang['gambar']; ?>" style="width:200px" class="img-thumbnail">
                        </div>
                        <div class="col mr-2">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?= $barang['id']; ?>">

                                        <div class="form-group">
                                            <label for="nama">Nama Barang</label>
                                            <input name="nama" type="text" value="<?= $barang['nama_barang']; ?>" readonly class="form-control" id="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_barang">Jenis Barang</label>
                                            <input name="jenis_barang" value="<?= $barang['jenis_barang']; ?>" type="text" readonly class="form-control" id="pengarang">
                                        </div>
                                        <div class="form-group">
                                            <label for="stok">Stok</label>
                                            <input name="stok" id="stok" value="<?= $barang['stok']; ?>" type="text" readonly class="form-control" id="pengarang">
                                        </div>
                                        <div class="form-group">
                                            <label for="StokMasuk">Stok Masuk</label>
                                            <input name="StokMasuk" type="number" class="form-control" id="StokMasuk">
                                            <?= form_error('StokMasuk', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="total">#DEBUG# Hasil tambah</label>
                                            <input type="text" name="total" id="total" readonly class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Barang</button>
                                            <a href="<?= base_url('HomeKar/'); ?>" class="btn btn-secondary">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>