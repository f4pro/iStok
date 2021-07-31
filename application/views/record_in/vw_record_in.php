<div class="container-fluid">
   <div class="row justify-content-center">
     <div class="col-12">
          <div class="row align-items-center my-4">
        <div class="col">
          <h1 class="page-title"><?php echo $judul; ?></h1>
        </div>
        
      </div>
      <?= $this->session->flashdata('message'); ?>
      <div class="row my-4">
       <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
              
             <h5 class="card-title"> Tabel Record In</h5>
              <table class="table datatables" id="dataTable-1">
              <div class="float-right">
                <a href="<?= base_url('Record_in/export') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
                </div>
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