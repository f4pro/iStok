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
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama</label>
                    <input type="text" class="form-control" id="nama_karyawan" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">NIK</label>
                    <input type="text" class="form-control" id="NIK" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Nomor Telepon</label>
                  <input type="text" class="form-control" id="notelp" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Gambar</label>
                  <input type="text" class="form-control" id="inputAddress6">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div>
</div>