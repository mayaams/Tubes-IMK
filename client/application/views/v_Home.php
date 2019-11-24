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
    .container{
      margin-left: 320px;
    }
    .container2{
      margin-top: 235px;
      margin-left: 400px;
    }
    .txt-50{
      font-size: 50px;
    }
    .txt-36{
      font-size: 36px;
    }
    .txt-18{
      font-size: 18px;
    }
    .txt-16{
      font-size: 16px;
    }
    .txt-25{
      font-size: 25px;
    }
    .btn-active{
      background: #4572A7;
      box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      width: 230px;
    }
    .btn-nactive{
      background: #C4C4C4;
      box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      width: 230px;
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

      <!-- ini drop down -->
      <div class=" dropdown">
        <button class="btn btn-secondary dropdown-toggle drpdwn" type="button" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 30px; height: 45px;width: 226px;">
          Anasya Wulandari<span> <i class="fas fa-user"></i></span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Logout</a>

        </div>
      </div>

    <!-- ini content -->
    <div class="container">
      <div class="container2 row mx-auto">
        <div class="col-6 mr-5">
          <div class="row mb-5">
            <div class="col font-weight-bold mb-4">
              <a class="txt-50">Selamat Datang</a> <br>
              <a class="txt-36">Anasya Wulandari</a> <br>
            </div>
            <img src="assets/image/line1.png" >
          </div>
          <div class="row">
            <div class="col-sm font-weight-bold">
              <a class="txt-18">Praktikum</a> <br>
              <a class="txt-25">Pemrograman Web</a> <br>
              <a class="txt-16">Asisten:  Febiana Anistya</a> <br>
              <button type="button" class="btn-active btn text-white mt-1">Mulai</button>
            </div>
            <div class="col-sm font-weight-bold">
              <a class="txt-18 text-muted">Praktikum</a> <br>
              <a class="txt-25 text-muted">Struktur Data</a> <br>
              <a class="txt-16 text-muted">Asisten:  -</a> <br>
              <button type="button" class="btn-nactive btn text-white mt-1">Mulai</button>
            </div>
          </div>
        </div>
        <div class="col-4 ml-5">
          <img src="assets/image/man.png">
        </div>
      </div>
    </div>
  </body>
</html>
