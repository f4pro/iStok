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
             <h5 class="card-title"> Tabel Record In</h5>
              <table class="table datatables" id="dataTable-1">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Masuk</th>
                <th>Barang</th>
                <th>Stok</th>
                <th>Pemeriksa</th>
                <th></th>
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
                  <!-- <a href="<?= base_url('Record_in/hapus/') . $ri['id']; ?>" class="badge badge-pill badge-warning">Hapus</a>
                  <a href="<?= base_url('Record_in/edit/') . $ri['id']; ?>" class="badge badge-pill badge-danger">Edit</a> -->
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