<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="page-title"><?php echo $judul; ?></h1>
      <p class="text-muted"></p>
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Form User</strong>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Account/upload') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $akun['id']; ?>">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nama">Nama User</label>
                    <input type="text" name='nama' value="<?= $user['nama']; ?>" class="form-control" id="nama" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" name='email' value="<?= $akun['email']; ?>" class="form-control" id="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password">Password [Rubah password untuk mereset]</label>
                    <input type="password" name='password' value="<?= $akun['password']; ?>" class="form-control" id="password" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <select type="text" name="status" class="form-control" id="status">
                      <?php if ($akun['status'] == "Admin") { ?>
                        <option selected value="Admin">Admin [Current]</option>
                      <?php } elseif ($akun['status'] == "Karyawan") { ?>
                        <option selected value="Karyawan">Karyawan [Current]</option>
                      <?php } else { ?>
                        <option selected value="Proses">Proses [Current]</option>
                      <?php } ?>
                      <option value="Admin">Administrator</option>
                      <option value="Karyawan">Karyawan</option>
                      <option value="Proses">Validasi</option>
                    </select>
                    <!-- <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?> -->
                  </div>
                  <hr class="my-4">
                  <div class="form-group col-md-6">
                    <a href="<?= base_url('Account/') ?>" class="btn btn-secondary col-md-12">Kembali</a>
                  </div>

                  <div class="form-group col-md-6">
                    <button type="submit" name="Tambah" class="btn btn-warning col-md-12">Konfimasi Perubahan</button>
                  </div>
              </form>
              <input type="hidden" name='password1' value="Passwordini123" class="form-control" id="password" disabled>


            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div>
</div>