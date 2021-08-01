<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col text-center">
            <h3 class="h3 text-dark"><?= $title; ?></h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>Barang</td>
                    <td>Stok</td>
                    <td>Pemeriksa</td>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_jual as $ri) : ?>
                    <tr>
                        <td><?= $ri['tanggal_keluar'] ?></td>
                        <td><?= $ri['nama_barang'] ?></td>
                        <td><?= $ri['stok'] ?></td>
                        <td><?= $ri['pekerja'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>