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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/stylox.css">
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
            <div class="mb-0 site-logo" style="top: 1.2px; left:-6px; font-size: 18px;"><a href="index.html" class="mb-0" style="color: #000000;">Monev<a style="opacity: 0;">.</a><a style="color:black;">Pembinaan</a><a style="opacity: 0;">.</a><a style="color: #16b3ac;">Puskesmas</a> </a></div>
          </div>
          <div class="col-13 col-md-10 d-none d-xl-block" style="margin-left:-80px;">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= base_url('home') ?>" class="nav-link" style="color:black !important;">Home</a></li>
                <li class="has-children">
                  <a class="nav-link" style="color:black !important;">Menu Cepat</a>
                  <ul class="dropdown">
                    <li><a href="<?= base_url('dinas') ?>" class="nav-link">Daftar Puskesmas</a></li>
                    <li><a href="<?= base_url('dinas') ?>" class="nav-link">Rekapitulasi Skor Puskesmas</a></li>
                  </ul>
                </li>


                <li><a href="<?= base_url('Auth/logout'); ?>" class="nav-link">Logout</a></li>




              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>



    </header>
    <div class="site-section" id="menu">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Form Menu</span>
            <h2 class="heading"><strong class="text-primary">Daftar</strong> Puskesmas</h2>
          </div>
        </div>
        </head>
        <div class="row">
          <div class="col-md-3" style="max-height: 500px; overflow-y: scroll;">

            <body>
              <a id="button"></a>
              <button type="button active" class="collapsible">Profil Puskesmas</button>
              <div class="content">
                <br>
                <img src="<?= base_url('assets/') ?>images/person_3.jpg" alt="Avatar" style="width:150px; border-radius: 50%; margin-left: 15%;">
                <br>
                <br>
                <p style="text-align: center;">Nama Puskesmas <span><strong>Puskesmas Jakarta</strong></span></p>
                <p style="text-align: center;">Lokasi<br> <span><strong>Pondok Labu, Jakarta Selatan No. 17</strong></span></p>
                <p style="text-align: center;">Tanggal Peresmian<br> <span><strong>20 Juni 2011</strong></span></p>
                <p style="text-align: center;">Status Akreditasi<br><span><strong>Paripurna</strong></span></p>
                <p style="text-align: center;">Motto<br> <span><strong>Jaya Selalu Puskesmas</strong></span></p>
              </div>
              <br>

              <p style="text-align: center;">Daftar Kabupaten/Kota dan Puskesmas</p>
              <?php foreach ($kabupaten as $k) : ?>
                <button type="button" class="collapsible"><?= $k['nama']; ?></button>
                <?php
                $puskesmas = puskesmas($k['kab_kota']);
                foreach ($puskesmas as $psk) :
                ?>
                  <div class="content">
                    <br>
                    <a href="#">
                      <p style="text-align: center;"><?= $psk['nama']; ?></p>
                    </a>
                    <hr>
                  </div>
                <?php endforeach; ?>
              <?php endforeach; ?>
          </div>