<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="page-title"><?php echo $judul; ?></h1>
      <p class="text-muted">Isilah sesuai dengan data SEBENARNYA.</p>
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Form Karyawan</strong>
            </div>
            <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama</label>
                    <input type="text" name='nama_karyawan' value="<?= set_value('nama_karyawan');?>"  class="form-control" id="nama_karyawan" placeholder="Nama Karyawan...">
                    <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">NIK</label>
                    <input type="text" name='NIK' value="<?= set_value('NIK');?>"  class="form-control" id="NIK" placeholder="NIK Karyawan...">
                    <?= form_error('NIK', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Alamat</label>
                  <input type="text" name='alamat' value="<?= set_value('alamat');?>"  class="form-control" id="alamat" placeholder="Alamat Karyawan...">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Nomor Telepon</label>
                  <input type="text" name='notelp' value="<?= set_value('notelp');?>"  class="form-control" id="notelp" placeholder="Nomor Telefon Karyawan...">
                    <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Usia</label>
                  <input type="text" name='usia' value="<?= set_value('usia');?>"  class="form-control" id="usia" placeholder="Usia Karyawan...">
                    <?= form_error('usia', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Gambar</label>
                  <div class="custom-file">
                    <input type="file" name="gambar" class="form-control" id="gambar">
                    <label for="gambar" class="custom-file-label">Choose File</label>
                  </div>
                </div>
                 <a href="<? base_url('Karyawan') ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" name="Tambah" class="btn btn-primary">Tambah</button>
              </form>
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div>
</div>