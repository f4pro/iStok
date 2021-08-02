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
              <form action="<?= base_url('SupportKar/upload') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama">Rate</label>
                  <select class="form-control" name="rate">
                    <option value="LOW">Low</option>
                    <option value="MEDIUM">Medium</option>
                    <option value="URGENT">Urgent</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="email">Judul Laporan</label>
                  <input type="text" name='jenis_support' value="<?= set_value('jenis_support'); ?>" class="form-control" id="jenis_support">
                </div>
                <div class="form-group">
                  <label for="email">Descripsi</label>
                  <textarea name="description" class="form-control" id="example-textarea" rows="4"><?= set_value('description'); ?></textarea>
                </div>
                <hr class="my-4">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <a href="<?= base_url('Support/') ?>" class="btn btn-secondary form-control">Kembali</a>
                  </div>
                  <div class="form-group col-md-6">
                    <button type="submit" name="Edit" class="btn btn-primary form-control">Kirim</button>
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