<!doctype html>
<html lang="en">

<head>
    <title><?= $judul; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fonts/icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/dinas.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/aos.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/pagination.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/stylex.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/tooltip.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div> <img src="<?= base_url('assets/') ?>images/logo.png" style=" height: 20px; width:20px;"></div>
                    <div class="col-3 col-xl-1">
                        <div class="mb-0 site-logo" style="top: 1.2px; left:-6px; font-size: 18px;"><a href="index.html" class="mb-0" style="color: #000000;">Instrumen<a style="opacity: 0;">.</a><a style="color: #16b3ac;">Monitoring</a><a style="opacity: 0;">.</a>dan<a style="opacity: 0;">.</a>Evaluasi<a style="opacity: 0;">.</a>Pembinaan<a style="opacity: 0;">.</a>Ke<a style="opacity: 0;">.</a>Puskesmas </a></div>
                    </div>
                    <div class="col-13 col-md-10 d-none d-xl-block" style="margin-left:-80px;">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="<?= base_url('home') ?>" class="nav-link" style="color:black !important;">Home</a></li>
                                <li class="has-children">
                                    <a class="nav-link" style="color:black !important;">Input Puskesmas</a>
                                    <ul class="dropdown">
                                        <br>
                                        <div class="row">
                                            <h5 class="col-md-6" style="font-size:18px; color: #000;"> Input Puskesmas </h5>
                                            <h5 class="col-md-6" style="font-size:18px; color: #000;"> Input Puskesmas </h5>
                                        </div>
                                        <hr>
                                        <div class="row">

                                            <ul class="col-md-6" style="list-style: none; padding:10px;">
                                                <li><a href="<?= base_url('Identitas_Puskesmas'); ?>" class="nav-link">Identitas Umum</a></li>
                                                <li><a href="<?= base_url('Pembina_Terpadu'); ?>" class="nav-link">Pembina Terpadu</a></li>
                                                <li><a href="<?= base_url('Organisasi_Manajemen'); ?>" class="nav-link">Organisasi Manajemen</a></li>
                                                <li><a href="<?= base_url('Lokasi_Puskesmas'); ?>" class="nav-link">Lokasi Puskesmas</a></li>
                                                <li><a href="<?= base_url('Bangunan_Puskesmas'); ?>" class="nav-link">Bangunan Puskesmas</a></li>
                                            </ul>


                                            <ul class="col-md-6" style="list-style: none; padding:10px;">
                                                <li><a href="<?= base_url('Prasarana_Puskesmas'); ?>" class="nav-link">Prasarana Puskesmas</a></li>
                                                <li><a href="<?= base_url('Peralatan_Puskesmas') ?>" class="nav-link">Peralatan Puskesmas</a></li>
                                                <li><a href="<?= base_url('Pengisian_Aspak') ?>" class="nav-link">Pengisian Aspak</a></li>
                                                <li><a href="<?= base_url('SDM_Puskesmas') ?>" class="nav-link">SDM Puskesmas</a></li>
                                                <li><a href="<?= base_url('Penilaian_Puskesmas') ?>" class="nav-link">Penilaian Kinerja Puskesmas</a></li>
                                            </ul>

                                        </div>

                                    </ul>
                                </li>


                                <li><a href="<?= base_url('Auth/logout') ?>" class="nav-link" style="color:red !important;"><strong>Logout</strong></a></li>




                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

                </div>
            </div>

        </header>
