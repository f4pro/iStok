<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="page-title"><?php echo $judul; ?></h1>
            <p class="text-muted">Isilah sesuai dengan data SEBENARNYA.</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Form User</strong>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nama</label>
                                        <input type="text" class="form-control" id="nama_karyawan" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Status</label>
                                        <select class="form-control" id="example-select">
                                            <option>User</option>
                                            <option>Admin</option>
                                            <option>Validasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">email</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Password</label>
                                    <input type="password" class="form-control" id="notelp" placeholder="">
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