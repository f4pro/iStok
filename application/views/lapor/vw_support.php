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
              <h5 class="card-title"></h5>
              <table class="table datatables" id="dataTable-1">
                <thead>
                  <tr>
                    <th><b>No</b></th>
                    <th><b>Rate</b></th>
                    <th><b>Nama Karyawan</b></th>
                    <th><b>Jenis Lapor</b></th>
                    <th><b>Status</b></th>
                    <th><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($support as $sp) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <?php if ($sp['rate'] == "LOW") { ?>
                        <td><button class="btn btn-badge badge-info">Low</button></td>
                      <?php } elseif ($sp['rate'] == "MEDIUM") { ?>
                        <td><button class="btn btn-badge badge-warning">Medium</button></td>
                      <?php } else { ?>
                        <td><button class="btn btn-badge badge-danger">Urgent</button></td>
                      <?php } ?> <td><?= $sp['karyawan'] ?></td>
                      <td><?= $sp['jenis_support'] ?></td>
                      <?php if ($sp['status_support'] == "Pending") { ?>
                        <td><button class="btn btn-badge badge-secondary">Pending</button></td>
                      <?php } elseif ($sp['status_support'] == "Accepted") { ?>
                        <td><button class="btn btn-badge badge-warning">Accepted</button></td>
                      <?php } else { ?>
                        <td><button class="btn btn-badge badge-success">Solved</button></td>
                      <?php } ?>
                      <td>
                        <a href="<?= base_url('support/edit/') . $sp['id']; ?>" class="badge badge-pill badge-info">Detail</a>
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