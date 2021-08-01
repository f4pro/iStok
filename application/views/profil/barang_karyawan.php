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
                                    <b><?= $br['nama_barang']; ?></b>
                                </div>
                                <div class="tetxt-xs font-weight-bold text-gray-800">Jenis Barang: <?= $br['jenis_barang'] ?></div>

                                <div>Stok</div>
                                <div>
                                    <?php if ($br['stok'] > 21) { ?>
                                        <a class="btn mb-2 btn-outline-info active"><?= $br['stok'] ?></a>
                                    <?php } elseif ($br['stok'] >= 5 && $br['stok'] <= 20) { ?>
                                        <a class="btn mb-2 btn-outline-warning active"><?= $br['stok'] ?></a>
                                    <?php } else { ?>
                                        <a class="btn mb-2 btn-outline-danger active">Not Available</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <img src="<?= base_url('assets/barang/') . $br['gambar']; ?>" style="width:100px" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="align-items-center">
                            <a href="<?= base_url('HomeKar/BarangMasukKar/') . $br['id']; ?>" class="btn mb-2 btn-primary">Barang Masuk</a>
                            <?php if ($br['stok'] > 3) { ?>
                                <a href="<?= base_url('HomeKar/BarangKeluarKar/') . $br['id']; ?>" class="btn mb-2 btn-warning">Ambil Barang</a>
                            <?php } else { ?>
                                <button type="button" class="btn mb-2 btn-outline-secondary" disabled>Ambil Barang</button>
                            <?php } ?>
                            <!-- <button type="button" class="btn mb-2 btn-danger" data-toggle="modal" data-target="#verticalModal">
                                <span class="fe fe-x"></span>
                            </button> -->
                            <!--badge badge-warning badge-block | badge badge-info-->
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
</div>