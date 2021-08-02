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
              <!-- <form action="<?= base_url('SupporKar/hapus') ?>" method="POST"> -->
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
                    <label for="status_support">Status</label>
                    <?php if ($support['status_support'] == "Pending") { ?>
                      <button class="btn btn-badge badge-secondary form-control">Pending</button>
                    <?php } elseif ($support['status_support'] == "Accepted") { ?>
                      <button class="btn btn-badge badge-warning form-control">Accepted</button>
                    <?php } else { ?>
                      <button class="btn btn-badge badge-success form-control">Solved</button>
                    <?php } ?>
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
                  <textarea class="form-control" id="description" rows="4" disabled><?= $support['description'] ?></textarea>
                </div>
                <hr class="my-4">
                <div class="form-group">
                  <label for="email">Feedback</label>
                  <textarea class="form-control" name="description_feed" id="description_feed" rows="4" disabled><?= $support['description_feed'] ?></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <a href="<?= base_url('SupportKar/') ?>" class="btn btn-secondary form-control">Kembali</a>
                  </div>
                  <?php if ($support['status_support'] == "Solved") { ?>
                    <div class="form-group col-md-6">
                      <a href="<?= base_url('SupportKar/hapus/'). $support['id'] ?>" name="delete" class="btn btn-info form-control">Selesai dan Hapus</a>
                    </div>
                  <?php } else { ?>
                    <div class="form-group col-md-6">
                      <button type="button" name="delete" class="btn btn-info form-control" disabled>Selesai dan Hapus</button>
                    </div>
                  <?php } ?>
                </div>
              <!-- </form> -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div>
</div>