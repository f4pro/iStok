<body class="light ">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-6 col-md-8 col-10 mx-auto" method="post" action="<?php base_url('auth/registrasi'); ?>">
                <div class="mx-auto text-center my-4">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
                        <!-- <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg> -->
                        <img src="<?= base_url('assets/') ?>assets/images/istok.png" alt="iStok" />
                    </a>
                    <h2 class="my-3">Register</h2>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="text" name="email" <?= set_value('email') ?> class="form-control" id="inputEmail4">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="nama" <?= set_value('nama') ?> class="form-control" id="inputEmail4">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" class="form-control">
                    </div>
                </div> -->
                <hr class="my-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputPassword5">Password</label>
                            <input type="password" name="password1" class="form-control" id="inputPassword5">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">Confirm Password</label>
                            <input type="password" name="password2" class="form-control" id="inputPassword6">
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                <a class="btn btn-lg btn-outlink-link btn-block" href="<?= base_url()?>Auth">[ I have one... Take me back! ]</a>
                <!-- <p class="mt-5 mb-3 text-muted text-center">© 2020</p> -->
            </form>
        </div>
    </div>