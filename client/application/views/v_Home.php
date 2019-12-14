<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/nilai.css">
    <link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/all.min">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/scrolling-nav.js"></script>

  <title>Home Login</title>
  </head>
  <style>
    body{
      background-color: #F3F2F2;
      font-family: 'Roboto', sans-serif;
    }
    .margin-nav{
      margin-left: 280px;
    }
    .container{
      margin-left: 360px;
    }
    .container2{
      margin-left: 350px;
      margin-top: -100px;
    }
    .txt-14{
      font-size: 12px;
    }
    .txt-50{
      font-size: 42px;
    }
    .txt-36{
      font-size: 25px;
    }
    .txt-18{
      font-size: 14px;
    }
    .txt-16{
      font-size: 12px;
    }
    .txt-25{
      font-size: 18px;
    }
    .btn-active{
      background: #4572A7;
      box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      width: 170px;
    }
    .btn-nactive{
      background: #C4C4C4;
      box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      width: 170px;
    }
    .txt-nactive{
      color: #C4C4C4;
    }
    .user{
      background: #353537;
      box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      width: 215px;
      height: 45px;
    }
    .img-size{
      width: 250px;
      height: 290px;
    }
    .btn-profil{
      width: 150px;
      height: 32px;
      background: #353537;
      border-radius: 15px;
      margin-left: 840px;
    }
    .buletatas{
      margin-top: -65px;
      margin-left: 730px;
      width: 260px;
      height: 280px;
    }
    .buletbawah{
      margin-top: 90px;
      margin-left: -310px;
      height: 80px;
      width: 1300px;
    }
  </style>
  <body>

    <!-- ini side bar -->
    <div id="sidebar">
      <h2>IMPULSE</h2>
      <ul>
        <img id="iconsiderbar" src="<?php echo base_url('/assets/image/home.png'); ?>" style="margin-left: -20px;">
        <li><a href="#"><b>Home</b></a></li>
        <img id="iconsiderbar" src="<?php echo base_url('/assets/image/nilai.png'); ?>" style="margin-left: -20px;">
        <li><b>Nilai</b></li>
        <img id="iconsiderbar" src="<?php echo base_url('/assets/image/upload.png'); ?>" style="margin-left: -20px;">
        <li><b>Upload Jawaban</b></li>
        <img id="iconsiderbar" src="<?php echo base_url('/assets/image/jadwal.png'); ?>" style="margin-left: -20px;">
        <li><b>Jadwal</b></li>
        <img id="iconsiderbar" src="<?php echo base_url('/assets/image/data.png'); ?>" style="margin-left: -20px;">
            <li><b>Data IFLAB</b></li>
          </ul>
      </div>

      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg margin-nav mt-3">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown justify-content-end">
              <button type="button" class="btn btn-secondary btn-profil txt-14" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anasya Wulandari
                <span> <i class="fas fa-user"></i></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profil</a>
                <a class="dropdown-item" href="#">Keluar</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- navbar end -->

    <!-- ini content -->
    <div class="container">
      <img class="buletatas" src="<?php echo base_url('/assets/image/buletatas.png'); ?>">
      <div class="container2 row mx-auto">
        <div class="col-5 mr-5">
          <div class="row mb-3">
            <div class="col font-weight-bold mb-2">
              <a class="txt-50">Selamat Datang</a> <br>
              <a class="txt-36">Anasya Wulandari</a> <br>
            </div>
            <img src="<?php echo base_url('/assets/image/line1.png'); ?>" >
          </div>
          <div class="row">
            <div class="ml-3 font-weight-bold">
              <a class="txt-18">Praktikum</a> <br>
              <a class="txt-25">Pemrograman Web</a> <br>
              <a class="txt-16">Asisten:  Febiana Anistya</a> <br>
              <button href="<?= base_url('index.php/MulaiPraktikum') ?>" type="button" class="btn-active btn btn-sm text-white mt-1">Mulai</button>
            </div>
            <div class="ml-4 font-weight-bold">
              <a class="txt-18 text-muted">Praktikum</a> <br>
              <a class="txt-25 text-muted">Struktur Data</a> <br>
              <a class="txt-16 text-muted">Asisten:  -</a> <br>
              <button type="button" class="btn-nactive btn btn-sm text-white mt-1">Mulai</button>
            </div>
          </div>
        </div>
        <div class=" ml-5">
          <img class="img-size" src="<?php echo base_url('/assets/image/man.png'); ?>">
        </div>
      </div>
      <img class="buletbawah" src="<?php echo base_url('/assets/image/buletbawah.png'); ?>">
    </div>
  </body>
</html>
