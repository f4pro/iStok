<div class="card-body">
  <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="col-sm-12">
      <div class="row align-items-center my-4">
        <div class="col">
          <h1 class="page-title"><?php echo $judul; ?></h1>
        </div>
        <div class="col-auto">
          <a href="<?= base_url() ?>karyawan/tambah" type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>Karyawan</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">

          <h5 class="card-title"> Tabel Karyawan</h5>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Profil</th>
                <th>Nama Karyawan</th>
                <th>Alamat</th>
                <th>No Hp/Telp</th>
                <th>Usia</th>
                <th>NIK</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                  <?php foreach ($karyawan as $kr) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><img src="<?= base_url('assets/karyawan/'). $kr['gambar']; ?>" style="width:100px" class="img-thumbnail"></td>
                <td><?= $kr['nama_karyawan'] ?></td>
                <td><?= $kr['alamat'] ?></td>
                <td><?= $kr['notelp'] ?></td>
                <td><?= $kr['usia'] ?></td>
                <td><?= $kr['NIK'] ?></td>
                <td>
                  <a href="<?= base_url('karyawan/hapus/') . $kr['id']; ?>" class="badge badge-pill badge-warning">Hapus</a>
                  <a href="<?= base_url('karyawan/edit/') . $kr['id']; ?>" class="badge badge-pill badge-danger">Edit</a>
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