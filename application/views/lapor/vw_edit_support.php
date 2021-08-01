<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="page-title"><?php echo $judul; ?></h1>
      <p class="text-muted"></p>
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Form</strong>
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $support['id']; ?>">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="nama">Rate</label>
                    <?php if ($support['rate'] == "URGENT") { ?>
                      <button type="button" class="btn btn-danger form-control">URGENT</button>
                    <?php } elseif ($support['rate'] == "MEDIUM") { ?>
                      <button type="button" class="btn btn-warning form-control">MEDIUM</button>
                    <?php } else { ?>
                      <button type="button" class="btn btn-info form-control">LOW</button>
                    <?php } ?>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">Status</label>
                    <select type="text" name="status" class="form-control" id="status">
                      <?php if ($support['status_support'] == "Pending") { ?>
                        <option selected>Pending [Current]</option>
                      <?php } elseif ($support['status_support'] == "Accepted") { ?>
                        <option selected>Accepted [Current]</option>
                      <?php } else { ?>
                        <option selected>Solved [Current]</option>
                      <?php } ?>
                      <option value="Pending">Pending</option>
                      <option value="Accepted">Accepted</option>
                      <option value="Solved">Solved</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="karyawan">Nama Karyawan</label>
                    <select name="karyawan" id="karyawan" class="custom-select form-control" disabled>
                      <?php foreach ($karyawan as $p) : ?>
                        <option value="<?= $p['id']; ?>" <?php if ($support['karyawan'] == $p['id']) {
                                                            echo "selected";
                                                          } ?>> <?= $p['nama_karyawan']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Judul Laporan</label>
                  <input type="text" name='jenis_support' value="<?= $support['jenis_support']; ?>" class="form-control" id="jenis_support" disabled>
                </div>
                <div class="form-group">
                  <label for="email">Descripsi</label>
                  <textarea class="form-control" id="example-textarea" rows="4" disabled><?= $support['description']?></textarea>
                </div>
                <hr class="my-4">
                <div class="form-group">
                  <label for="email">Reply</label>
                  <textarea class="form-control" name="description_feed" id="example-textarea" rows="4"><?= $support['description_feed']?></textarea>
                </div>
                <!-- <div class="form-group">
                  <a href="<?= base_url('Account/') ?>" class="btn btn-secondary">Kembali</a>
                </div> -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <a href="<?= base_url('Support/') ?>" class="btn btn-secondary form-control">Kembali</a>
                  </div>
                  <div class="form-group col-md-6">
                    <button type="submit" name="Edit" class="btn btn-primary form-control">Konfimasi Perubahan</button>
                  </div>
                </div>
              </form>
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div>
</div>