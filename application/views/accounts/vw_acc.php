<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="row align-items-center my-4">
        <div class="col">
          <h1 class="page-title"><?php echo $judul; ?></h1>
        </div>
        <!-- <div class="col-auto">
          <a href="<?= base_url() ?>barang/tambah" type="button" class="btn btn-primary mb-4"><span class="fe fe-plus fe-16 mr-3"></span>&nbsp;&nbsp;Barang</a>
        </div> -->
      </div>
      <?= $this->session->flashdata('message'); ?>
      <div class="row my-4">
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title"> Tabel Akun</h5>
              <table class="table datatables" id="dataTable-1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>

                  <?php foreach ($akun as $us) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $us['nama'] ?></td>
                      <td><?= $us['email'] ?></td>
                      <td>******</td>
                      <?php if ($us['status'] == "Karyawan") { ?>
                        <td><button class="btn btn-badge badge-success">Karyawan</button></td>
                      <?php } elseif ($us['status'] == "Admin") { ?>
                        <td><button class="btn btn-badge badge-warning">Administrator</button></td>
                      <?php } else { ?>
                        <td><button class="btn btn-badge badge-danger">No Role</button></td>
                      <?php } ?>
                      <td>
                        <a href="<?= base_url('account/edit/') . $us['id']; ?>" class="badge badge-pill badge-info">Detail</a>
                      </td>
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