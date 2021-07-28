<body class="light">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="post" action="<?= base_url('auth/cek_login');?>">
            <?=$this->session->flashdata('message');?>
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <!-- <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg> -->
                    <img src="<?= base_url('assets/') ?>assets/images/istok.png" alt="iStok" />
                </a>
                <h1 class="h6 mb-3">Sign In</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control form-control-lg" placeholder="Password" required="">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Stay logged in </label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login!</button>
                <a class="btn btn-lg btn-light btn-block" type="submit" href="<?= base_url() ?>auth/registrasi">Don't have one?</a>
                <p class="mt-5 mb-3 text-muted">© 2021, iStok</p>
            </form>
        </div>
    </div>