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
    .container3{
      margin-top: 50px;
      margin-left: 1500px;
    }
    .container2{
      margin-top: 200px;
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
    <div class="alert container3 user text-white">
      Anasya Wulandari
      <span class="ml-3"><img src="assets/image/user.png" ></span>
    </div>
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
