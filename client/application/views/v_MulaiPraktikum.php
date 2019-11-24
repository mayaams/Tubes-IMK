<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <style>
    body{
      background-color: #F3F2F2;
      font-family: 'Roboto', sans-serif;
    }
    .card-data{
      width: 729px;
      height: 574px;
      background: #FFFFFF;
      border-radius: 30px;
    }
    .txt-18{
      font-size: 18px;
    }
    .txt-24{
      font-size: 24px;
    }
    .txt-14{
      font-size: 14px;
    }
    .form{
      background: #FFFFFF;
      box-shadow: inset 0px 10px 35px rgba(0, 0, 0, 0.15);
      border-radius: 10px;
    }
    ul li b{
       color: #FFFFFF;
       position: relative;
       list-style: none;
       padding: 8px;
       margin: 38px;
       top: 24px;
     }
     #sidebar{
       position: fixed;
       width: 266px;
       height: 100%;
       background: #1E1E1E;
     }
     #sidebar h2{
       color: #D74129;
       position: relative;
       width: 152px;
       height: 48px;
       left: 57px;
       top: 47px;
     }
     #iconsiderbar{
       /* margin-top: 30px; */
       position: relative;
       top: 60px;
       right: -24px;
       padding: 12px;
     }
     .btn-a{
       width: 78.15px;
       height: 32px;
       background: #5088CA;
       border-radius: 15px;
     }
  </style>
  <body>
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
            <div class="card-body mt-5 ml-5 mr-5">
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
              <button type="button" class="btn-a txt-14 btn text-white mt-1">Mulai</button>
            </div>
          </div>
        </div>
        <div class="col-2 border border-danger ml-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <a>WAKTU</a><br>
              <img src="assets/image/line2.png" >
              <a>00:01:30<a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content end -->
  </body>
</html>
