<!doctype html>
<html lang="en">

<head>
    <title>Puskesmas Percontohan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

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

                        <div class="mb-0 site-logo" style="top: 1.2px; left:-6px; font-size: 18px;"><a href="#" class="mb-0">Puskesmas<a style="opacity: 0;">.</a><a style="color: #16b3ac;">Percontohan</a> </a></div>
                    </div>

                    <div class="col-13 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="<?= base_url('home') ?>" class="nav-link">Home</a></li>
                                <li class="has-children">
                                    <a class="nav-link">Menu Cepat</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('dinas') ?>" class="nav-link">Dinas</a></li>
                                        <li><a href="<?= base_url('dinas/dinas2'); ?>" class="nav-link">Dinas2</a></li>
                                        <li><a href="<?= base_url('dinas/dinas3'); ?>" class="nav-link">Dinas3</a></li>
                                        <li><a href="<?= base_url('dinas') ?>" class="nav-link">Form</a></li>
                                        <li><a href="<?= base_url('dinas') ?>" class="nav-link">Form 2</a></li>
                                        <li><a href="<?= base_url('dinas') ?>" class="nav-link">Form 3</a></li>
                                        <li><a href="<?= base_url('dinas') ?>" class="nav-link">Table</a></li>
                                        <li class="has-children">
                                            <a href="#">Bab 6</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Bab 6.1</a></li>
                                                <li><a href="#">Bab 6.2</a></li>
                                                <li><a href="#">Bab 6.3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>


                                <li><a href="about.html" class="nav-link">Info</a></li>




                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

                </div>
            </div>

        </header>


        <!-- MAIN -->



        <div class="slide-item overlay" style="background-image: url('<?= base_url('assets/') ?>images/hero_1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1 class="heading mb-5">Selamat Datang <?= $user['nama']; ?></h1>
                        <p><a href="#menu" class="btn" style="background-color: #16b3ac; color: #ffffff;">Mulai</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container quick-contact">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="link-lg d-flex align-items-center">
                        <span class="icon-phone"></span>
                        <div>
                            <span>Pertanyaan? Hubungi</span>
                            <strong>0813-0030-0011</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="link-lg d-flex align-items-center">
                        <span class="icon-envelope"></span>
                        <div>
                            <span>Atau email</span>
                            <strong>info@Kemenkes.com</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="link-lg d-flex align-items-center">
                        <span class="icon-book"></span>
                        <div>
                            <span>Manual Book</span>
                            <strong>Manual Book Download</strong>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="site-section" id="menu">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7 mx-auto text-center">
                        <span class="subheading">Form Menu</span>
                        <h2 class="heading"><strong class="text-primary">Menu Utama</strong> Puskesmas Percontohan</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="form.html" class="service-v1 text-center">
                            <span class="flaticon-stethoscope"></span>
                            <h3>Identitas Umum</h3>
                            <p>Berisi form tentang identitas umum tentang puskesmas</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="#" class="service-v1 text-center">
                            <span class="flaticon-telephone"></span>
                            <h3>Pembina Terpadu</h3>
                            <p>Berisi identitas pembina terpadu puskesmas dan lain lain</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <a href="#" class="service-v1 text-center">
                            <span class="flaticon-sphygmomanometer"></span>
                            <h3>Data Umum</h3>
                            <p>Berisi tentang detail puskesmas dari berbagai aspek</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>




    </div> <!-- .site-wrap -->