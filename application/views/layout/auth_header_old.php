<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>iStok - Login</title>
    <!-- Favicon -->
    <link href="<?= base_url('assets_2/')?>assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?= base_url('assets_2/')?>assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?= base_url('assets_2/')?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?= base_url('assets_2/')?>assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="<?= base_url('assets_2/')?>assets/css/docs.min.css" rel="stylesheet">
</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="../index.html">
                    <img src="<?= base_url('assets_2/')?>assets/img/brand/white.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="../index.html">
                                    <img src="<?= base_url('assets_2/')?>assets/img/brand/blue.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                        <li class="nav-item dropdown">
                            <!-- <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                                <i class="ni ni-ui-04 d-lg-none"></i>
                                <span class="nav-link-inner--text">Components</span>
                            </a> -->
                            <div class="dropdown-menu dropdown-menu-xl">
                                <div class="dropdown-menu-inner">
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                                        <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                            <i class="ni ni-spaceship"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="heading text-primary mb-md-1">Getting started</h6>
                                            <p class="description d-none d-md-inline-block mb-0">Get started with Bootstrap, the world's most popular framework for building responsive sites.</p>
                                        </div>
                                    </a>
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                                        <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                            <i class="ni ni-ui-04"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h5 class="heading text-warning mb-md-1">Components</h5>
                                            <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>