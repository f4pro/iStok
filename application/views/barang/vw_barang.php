<div class="col-md-6 my-4">
  <h1 class="page-title"><?php echo $judul; ?></h1>
  <a href="<?= base_url() ?>barang/tambah" type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#eventModal"><span class="fe fe-plus fe-16 mr-3"></span>Barang</a>
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
        
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                  <a href=" " class="badge badge-pill badge-warning">Hapus</a>
                  <a href=" "class="badge badge-pill badge-danger">Edit</a>
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
