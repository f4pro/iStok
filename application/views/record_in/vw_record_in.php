<div class="card-body">
  <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="col-sm-12">
      <div class="row align-items-center my-4">
        <div class="col">
          <h1 class="page-title"><?php echo $judul; ?></h1>
        </div>
        <div class="col-auto">
          <a href="<?= base_url() ?>record_in/tambah" type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>Record In</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">

          <h5 class="card-title">Barang-In</h5>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Masuk</th>
                <th>Barang</th>
                <th>Stok</th>
                <th>Pemeriksa</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                  <?php foreach ($record_in as $ri) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $ri['tanggal_masuk'] ?></td>
                <td><?= $ri['nama_barang'] ?></td>
                <td><?= $ri['stok'] ?></td>
                <td><?= $ri['pemeriksa'] ?></td>
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