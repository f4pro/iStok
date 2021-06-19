<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="page-title"><?php echo $judul; ?></h1>
      <p class="text-muted">Please fill with VERIFIED email and username.</p>
      <div class="col-md-12">
        <div class="card shadow mb-4">
          <div class="col-md-6 md-4">
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 md-4">
                  <div class="row">
                    <div class="form-group">
                      <label for=" simpleinput">Username</label>
                      <input type="text" id="simpleinput" class="form-control" placeholder="@username">
                    </div>
                    <div class="form-group mb-3">
                      <label for="example-email">Email</label>
                      <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                      <label for="example-password">Password</label>
                      <input type="password" id="example-password" class="form-control" value="password">
                    </div>
                    <div class="form-group mb-3">
                      <label for="example-palaceholder">Placeholder</label>
                      <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>