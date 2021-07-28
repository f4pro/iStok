<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
    <div class="col-md-12">
    <?= $this->session->flashdata('message');
    ?>
</div>
    <?php $i = 1; ?>
        <?php foreach ($barang as $br) : ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <?= $br['nama_barang']; ?></div>
                    <div class="tetxt-xs font-weight-bold text-gray-800">Jenis Barang: <?= $br['jenis_barang'] ?></div>
                       
                    <div>Stok <a class="badge badge-info"><?= $br['stok'] ?></a></div>
                </div>
                    <div class="col-auto">
                    <img src="<?= base_url('assets/barang/') . $br['gambar']; ?>" style="width:100px" class="img-thumbnail">
                </div>
            </div>
                    <div class="align-items-center">
                    <a href="<?= base_url('Profil/keranjang/') . $br['id'] ?>" class="badge badge-warning badge-block">Checkout</a>
                </div>
            </div>
            </div>
        </div>
    <?php endforeach ?>
    </div>
</div>
</div>