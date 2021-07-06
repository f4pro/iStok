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
                                        <input type="text" name='nama' value="<?= set_value('nama');?>"  class="form-control" id="nama" placeholder="Nama User...">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Email</label>
                                        <input type="text" name='email' value="<?= set_value('email');?>"  class="form-control" id="email" placeholder="Email...">
                                        <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Password</label>
                                    <input type="text" name='password' value="<?= set_value('nama_barang');?>"  class="form-control" id="nama_barang" placeholder="Nama Barang...">
                                    <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Status</label>
                                    <input type="text" name='nama_barang' value="<?= set_value('nama_barang');?>"  class="form-control" id="nama_barang" placeholder="Nama Barang...">
                                    <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
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