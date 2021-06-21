<div class="card-body">
  <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="col-sm-12">
      <div class="row align-items-center my-4">
        <div class="col">
          <h1 class="page-title"><?php echo $judul; ?></h1>
        </div>
        <div class="col-auto">
          <a href="<?= base_url() ?>barang/tambah" type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>Barang</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">

          <h5 class="card-title"> Tabel Barang</h5>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Stok Barang</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                  <?php foreach ($barang as $br) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $br['nama_barang'] ?></td>
                <td><?= $br['jenis_barang'] ?></td>
                <td><?= $br['stok'] ?></td>
                <td><img src="<?= base_url('assets/barang/'). $br['gambar']; ?>" style="width:100px" class="img-thumbnail"></td>
                <td>
                  <a href=" " class="badge badge-pill badge-warning">Hapus</a>
                  <a href=" " class="badge badge-pill badge-danger">Edit</a>
              </tr>
              <?php $i++; ?>
                  <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>