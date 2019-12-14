<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMPULSE</title>
</head>
<!-- Stylesheets -->
<!-- <link rel="stylesheet" href="assets/css/loginPage.css"> -->

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- stylesheet -->
<style>
    .container {
        padding: 5px;
        position: absolute;
        /* width: 1009px;
        height: 1386px; */
        left: 448px;
        top: 161px;
    }
    .tab-content{
    position: center;
    width: 1600px;
    height: 1000px;
    margin-top: 60px;
    margin-left: -140px;
    background: #fff;
    color: #000;
    border-radius: 30px;
    z-index: 1000;
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
    padding : 15px;
    }
    ul li b {
        color: #FFFFFF;
        position: relative;
        list-style: none;
        padding: 8px;
        margin: 38px;
        top: 24px;
    }

    #sidebar {
        position: fixed;
        width: 266px;
        height: 100%;
        background: #1E1E1E;
        top: 0px;
    }

    #sidebar h2 {
        color: #D74129;
        position: relative;
        width: 152px;
        height: 48px;
        left: 57px;
        top: 47px;
    }

    #iconsiderbar {
        position: relative;
        top: 60px;
        right: -24px;
        padding: 12px;
    }
    .card{
        /* position: absolute; */
        width: 200px;
        height: 250px;
        /* left: 389px;
        top: 361px; */
        box-shadow: 0px 4px 18px rgba(0, 0, 0, 0.06);
        border-radius: 5px;
        border: none;
    }
</style>

<body>
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
<div class="container">
    <div class="tab-content grid">
    <center>
    <img src="<?php echo base_url('/assets/image/Logo_DataIfLab.png');?>" style="margin-top: 48px;">
    </center>
    <div class="row">
    <div class="col">
       <div class="card" style="width: 18rem;left: 24px;
                top: 48px;">
                <center>
                <img src="<?php echo base_url('/assets/image/appl.png');?>" class="card-img-top" alt="..." style="width: 48px;
        `       height: 49px; margin-top: 60px;">
                <div class="card-body">
                    <p class="card-text">Analisis dan Perancangan Perangkat Lunak </p>
                </div>
            </center>
        </div>
    </div>
    <div class="col-sm">
    <div class="col-sm">
       <div class="card" style="width: 18rem;left:24px;
                top: 48px;">
                <center>
                <img src="<?php echo base_url('/assets/image/pbd.png');?>" class="card-img-top" alt="..." style="width: 48px;
        `       height: 49px; margin-top: 60px;">
                <div class="card-body">
                    <p class="card-text">Pemodelan Basis Data </p>
                </div>
            </center>
        </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="col-sm">
       <div class="card" style="width: 18rem;left: 24px;
                top: 48px;">
                <center>
                <img src="<?php echo base_url('/assets/image/dap.png');?>" class="card-img-top" alt="..." style="width: 48px;
        `       height: 49px; margin-top: 60px;">
                <div class="card-body">
                    <p class="card-text">Dasar Algoritma dan Pemrograman </p>
                </div>
            </center>
        </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="col-sm">
       <div class="card" style="width: 18rem;left: 24px;
                top: 48px;">
                <center>
                <img src="<?php echo base_url('/assets/image/jrk.png');?>" class="card-img-top" alt="..." style="width: 48px;
        `       height: 49px; margin-top: 60px;">
                <div class="card-body">
                    <p class="card-text">Jaringan Komputer </p>
                </div>
            </center>
        </div>
    </div>
  </div>
  
</div>
</body>
</html>
