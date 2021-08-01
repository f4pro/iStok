<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="page-title"><?php echo $judul; ?></h1>
      <p class="text-muted"></p>
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title"> </strong>
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $akun['id']; ?>">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nama">Nama User</label>
                    <input type="text" name='nama' value="<?= $akun['nama']; ?>" class="form-control" id="nama_barang" disabled>
                    <!-- <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" name='email' value="<?= $akun['email']; ?>" class="form-control" id="email">
                    <!-- <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" name='password' value="<?= $akun['password']; ?>" class="form-control" id="password" disabled>
                    <!-- <?= form_error('jenis_barang', '<small class="text-danger pl-3">', '</small>'); ?> -->
                  </div>
                  <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select type="text" name="status" class="form-control" id="status">
                      <?php if ($akun['status'] == "Admin") { ?>
                        <option selected>Admin [Current]</option>
                      <?php } elseif ($akun['status'] == "Karyawan") { ?>
                        <option selected>Karyawan [Current]</option>
                      <?php } else { ?>
                        <option selected>Proses [Current]</option>
                      <?php } ?>
                      <option value="Admin">Administrator</option>
                      <option value="Karyawan">Karyawan</option>
                      <option value="Proses">Validasi</option>
                    </select>
                    <!-- <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?> -->
                  </div>
                  <div class="form-group col-md-6">
                    <a href="<?= base_url('Account/') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="edit" class="btn btn-warning">Konfimasi Perubahan</button>
                  </div>
              </form>
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div>
</div>