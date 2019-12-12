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

    <title>Mulai Praktikum</title>
  </head>

  <style>
    body{
      background-color: #F3F2F2;
      font-family: 'Roboto', sans-serif;
    }
    .container{
      margin-left: 355px;
    }
    .margin-nav{
      margin-left: 265px;
    }
    .card-data{
      width: 670px;
      height: 480px;
      background: #FFFFFF;
      border-radius: 30px;
      box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
    }
    .card-waktu{
      width: 200px;
      height: 140px;
      background: #FFFFFF;
      box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
    }
    .txt-18{
      font-size: 14px;
    }
    .txt-24{
      font-size: 20px;
    }
    .txt-14{
      font-size: 12px;
    }
    .txt-36{
      font-size: 30px;
    }
    .form{
      background: #FFFFFF;
      box-shadow: inset 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 10px;
    }
     .btn-a{
       width: 78.15px;
       height: 32px;
       background: #5088CA;
       border-radius: 15px;
     }
     .btn-info{
       width: 140px;
       height: 32px;
       background: #353537;
       border-radius: 15px;
       margin-left: 75px;
       margin-right: 654px;
     }
     .btn-profil{
       width: 150px;
       height: 32px;
       background: #353537;
       border-radius: 15px;
     }
  </style>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg margin-nav mb-5 mt-3">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <button type="button" class="btn btn-secondary  btn-info txt-14">Mulai Praktikum</button>
          </li>
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

    <!-- sidebar start -->
    <div id="sidebar">
        <h2>IMPULSE</h2>
        <ul>
          <img id="iconsiderbar" src="<?php echo base_url('/assets/image/home.png'); ?>" style="margin-left: -20px;">
          <li><b>Home</b></li>
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
    <!-- sidebar end -->

    <!-- content start -->
    <div class="container">
      <div class="row">
        <div class="mr-5 ">
          <div class="card card-data txt-18 ">
            <div class="card-body mt-4 ml-5 mr-5">
              <a class="txt-24 font-weight-bold ml-2">Data Praktikum </a><br>
              <table class="table table-borderless mt-3">
                <thead>
                </thead>
                <tbody>
                  <tr>
                    <td>Praktikum</td>
                    <td>Pemrograman Berorientasi Objek</td>
                  </tr>
                  <tr>
                    <td>Modul</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td>IF 41 10</td>
                  </tr>
                  <tr>
                    <td>Jadwal Praktikum</td>
                    <td>Senin [9.30 - 12.30 WIB]</td>
                  </tr>
                  <tr>
                    <td>Asprak</td>
                    <td>Febiana Anistya (ANI)</td>
                  </tr>
                  <tr>
                    <td>Authentifikasi</td>
                    <td><input class="form-control form-control-sm form" type="text" placeholder="huhuhu"></td>
                  </tr>
                </tbody>
              </table>
              <div class=" d-flex justify-content-end">
                <button type="button" class="btn-a txt-14 btn text-white mt-1">Mulai</button>
              </div>
            </div>
          </div>
        </div>
        <div class="ml-2">
          <div class="card card-waktu">
            <div class="card-body mt-1">
              <div class="d-flex justify-content-center mb-1 mt-1">
                <a class="txt-18 font-weight-bold">WAKTU</a>
              </div>
              <div class="d-flex justify-content-center mb-2">
                <img src="assets/image/line2.png" >
              </div>
              <div class="d-flex justify-content-center">
                <a class="txt-36 align-self-center">00:01:30<a>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content end -->

  </body>
</html>
