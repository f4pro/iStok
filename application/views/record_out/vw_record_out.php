<div class="container-fluid">
   <div class="row justify-content-center">
     <div class="col-12">
          <div class="row align-items-center my-4">
        <div class="col">
          <h1 class="page-title"><?php echo $judul; ?></h1>
        </div>
        <div class="col-auto">
          <!-- <a href="<?= base_url() ?>record_in/tambah" type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>Record In</a> -->
        </div>
      </div>
      <?= $this->session->flashdata('message'); ?>
      <div class="row my-4">
       <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
             <h5 class="card-title"> Tabel Record Out</h5>
              <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Keluar</th>
                <th>Barang</th>
                <th>Stok</th>
                <th>Pekerja</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                  <?php foreach ($record_out as $ro) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $ro['tanggal_keluar'] ?></td>
                <td><?= $ro['barang'] ?></td>
                <td><?= $ro['stok'] ?></td>
                <td><?= $ro['pekerja'] ?></td>
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
                  </div>