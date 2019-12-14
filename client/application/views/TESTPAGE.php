<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>TEST PAGE</title>
  </head>
  <style>
    body{
      background-color: #F3F2F2;
      font-family: 'Roboto', sans-serif;
    }
    .btn-d{
      width: 200px;
      height: 32px;
      background:  #353537;
      border-radius: 15px;
    }
    .txt-14{
      font-size: 12px;
    }
    .txt-40{
      font-size: 40px;
      margin-left: auto;
    }
  </style>
  <body>
    <div class="d-flex justify-content-center">
      <a class="txt-40 mt-5 font-weight-bold ml-2">PAGE YANG SUDAH SELESAI</a>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button"  onclick="window.location.href = '<?= base_url('index.php/Welcome/loginPage')?>';" class="btn-d txt-14 btn text-white mt-2"> Login
      </button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/home')?>';" class="btn-d txt-14 btn text-white mt-2">Home</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/MulaiPraktikum')?>';" class="btn-d txt-14 btn text-white mt-2">Mulai Pratikum</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/tesAwal')?>';" class="btn-d txt-14 btn text-white mt-2">Soal Tes Awal</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/jurnal')?>';" class="btn-d txt-14 btn text-white mt-2">Soal Jurnal</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/uploadJurnal')?>';" class="btn-d txt-14 btn text-white mt-2">Upload Jawaban via Jurnal</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/uploadTA')?>';" class="btn-d txt-14 btn text-white mt-2">Upload Jawaban via Tes Akhir</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/tesAkhir')?>';" class="btn-d txt-14 btn text-white mt-2">Soal Tes Akhir</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/feedbackAsprak')?>';" class="btn-d txt-14 btn text-white mt-2">Feedback Asprak</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/uploadJawaban')?>';" class="btn-d txt-14 btn text-white mt-2">Upload Jawaban</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/History')?>';" class="btn-d txt-14 btn text-white mt-2">History Jawaban</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/profil')?>';"  class="btn-d txt-14 btn text-white mt-2">Profile</button>
    </div>
    <div class="container d-flex justify-content-center mt-3">
      <button type="button" onclick="window.location.href = '<?= base_url('index.php/Welcome/dataiflab')?>';" class="btn-d txt-14 btn text-white mt-2">Data IF Lab</button>
    </div>
  </body>
</html>
