<div class="card-body">
  <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="col-sm-12">
      <div class="row align-items-center my-4">
        <div class="col">
          <h1 class="page-title"><?php echo $judul; ?></h1>
        </div>
        <div class="col-auto">
          <a href="<?= base_url() ?>user/tambah" type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>User</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">

          <h5 class="card-title"></h5>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                  <?php foreach ($user as $ur) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $ur['nama'] ?></td>
                <td><?= $ur['email'] ?></td>
                <td><?= $ur['password'] ?></td>
                <td><?= $ur['status'] ?></td>
                <td>
                  <a href="<?= base_url('user/hapus/') . $ur['id']; ?>" class="badge badge-pill badge-warning">Hapus</a>
                  <a href="<?= base_url('user/edit/') . $ur['id']; ?>" class="badge badge-pill badge-danger">Edit</a>
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