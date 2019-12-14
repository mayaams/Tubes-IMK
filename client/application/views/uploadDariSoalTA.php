<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tes Akhir</title>
</head>

<!-- Stylesheets -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/uploadDariSoal.css">
<link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet" />
<link href="<?= base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/css/all.min">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

</style>

<body>

  <!-- ini side bar -->
  <div id="sidebar">
    <h2>IMPULSE</h2>
    <ul>
      <img id="iconsiderbar" src="<?php echo base_url('/assets/image/home.png'); ?>" style="margin-left: -20px;">
      <li><a href="#"><b>Home</b></a></li>
      <img id="iconsiderbar" src="<?php echo base_url('/assets/image/nilai.png'); ?>" style="margin-left: -20px;">
      <li><b style="color: #E2D134;">Nilai</b></li>
      <img id="iconsiderbar" src="<?php echo base_url('/assets/image/upload.png'); ?>" style="margin-left: -20px;">
      <li><b>Upload Jawaban</b></li>
      <img id="iconsiderbar" src="<?php echo base_url('/assets/image/jadwal.png'); ?>" style="margin-left: -20px;">
      <li><b>Jadwal</b></li>
      <img id="iconsiderbar" src="<?php echo base_url('/assets/image/data.png'); ?>" style="margin-left: -20px;">
      <li><b>Data IFLAB</b></li>
    </ul>
  </div>

  <!-- ini drop down akun -->
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle drpdwn" type="button" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 30px; height: 45px;width: 226px;">
      Anasya Wulandari<span> <i class="fas fa-user"></i></span>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Logout</a>
    </div>
  </div>

  <p id="sisawaktu">MODUL 4</p>
  <div class="sisaWaktu">
    <center>
      <p style="padding-top: 5px">
        <h6><b>SISA WAKTU</b></h6>
        <hr>
        <center>
          <p id="timestamp">00:00:11</p>
        </center>
      </p>
    </center>
  </div>

  <div id="tesAwal">
    <center>
      <p>Tes Akhir</p>
    </center>
  </div>

  <div class="tabSoal">
    <center>
      <p id="judulTab"><b>Soal</b></p>
      <p id="judulTab2"><b>Feedback</b></p>
      <p id="judulTab3"><b>Upload Jawaban</b></p>
    </center>

    <div id="blockbox"></div>
    <div id="containerSoal">
      <div id="navigation"><br><br>
        <center>
          <h6 style="padding-bottom: 3px;"><b>UPLOAD JAWABAN</b></h6>
        </center>
        <hr>
      </div>
      <center> <button id="upload">Upload Jawaban</button></center>
    </div>
  </div>
  </div>

</body>

</html>