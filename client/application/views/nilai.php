<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nilai</title>
</head>

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


<script type="text/javascript">
  window.onload = function() {

    // Construct options first and then pass it as a parameter
    var options1 = {
      animationEnabled: true,
      theme: "light2", // "light2", "dark1", "dark2"
      data: [{
        type: "column", //change it to line, area, bar, pie, etc
        dataPoints: [{
            label: "Modul 1",
            y: 99
          },
          {
            label: "Modul 2",
            y: 80
          },
          {
            label: "Modul 3",
            y: 75
          },
          {
            label: "Modul 4",
            y: 80
          },
          {
            label: "Modul 5",
            y: 90
          }
        ]
      }]
    };

    $("#resizable").resizable({
      create: function(event, ui) {
        //Create chart.
        $("#chartContainer1").CanvasJSChart(options1);
      },
      resize: function(event, ui) {
        //Update chart size according to its container size.
        $("#chartContainer1").CanvasJSChart().render();
      }
    });

  }
</script>

<style media="screen">
  /* NAVBAR */
  .nav {
    margin-left: 350px;
    margin-top: 50px;
    background: #353537;
    box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
    border-radius: 30px;
    width: 180px;
    height: 37px;
    position: fixed;
    z-index: 3;
  }

  .nav a {
    padding: 12px 10px;
    color: white;
    font-family: Roboto;
    font-style: normal;
    font-weight: 600;
    border-radius: 30px;
    font-size: 13px;
    line-height: 2.9;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -ms-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
  }

  .nav a.active {
    background-color: white;
    box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.1);
    color: #353537 !important;
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

  <!-- ini navbar -->
  <div class="nav">
    <nav>
      <a href="#bagianNilai">Grafik Nilai</a>
      <a href="#conKeterangan" style="margin-left: 3.5px">Keterangan</a>
    </nav>
  </div>

  <div class="dropdown" id="bagianNilai">
    <br><br><br><br><br><br>
    <p><b style="font-size: 15px; margin-left: 360px">Praktikum</b></p>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 450px; margin-top: -90px;">
      Pemrograman Berorientasi Objek (PBO)
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Pemrograman Berorientasi Objek (PBO)</a>
      <a class="dropdown-item" href="#">Jaringan Komputer (JRK)</a>
    </div>
  </div>



  <!-- ini bagian nilai -->
  <div class="container" id="conGrafikNilai">
    <br><br>
    <h4 style="margin-left: 390px"><b>Grafik Nilai</b></h4>
    <br>
    <div id="resizable" style="height: 270px; width: 800px; margin: auto">
      <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
    </div>
  </div>

  <div class="tab-content" id="conKeterangan">
    <div class="container">
      <br><br>
      <h4 style="margin-left: 70px;"><b>Keterangan</b></h4>
      <br>
      <table class="table table-hover" id="tabelNilai" style="width: 90%; margin: auto; text-align: center; border-radius: 30px;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Modul</th>
            <th scope="col">Asisten Praktikum</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Tes Awal</th>
            <th scope="col">Jurnal</th>
            <th scope="col">Tes Akhir</th>
            <th scope="col">Skill</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Yayan Prima</td>
            <td>19/09/2019</td>
            <td>10</td>
            <td>60</td>
            <td>5</td>
            <td>24</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Yayan Prima</td>
            <td>26/09/2019</td>
            <td>10</td>
            <td>50</td>
            <td>20</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Yayan Prima</td>
            <td>03/10/2019</td>
            <td>10</td>
            <td>55</td>
            <td>10</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Yayan Prima</td>
            <td>03/10/2019</td>
            <td>10</td>
            <td>60</td>
            <td>5</td>
            <td>5</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Yayan Prima</td>
            <td>03/10/2019</td>
            <td>10</td>
            <td>60</td>
            <td>20</td>
            <td>0</td>
          </tr>
        </tbody>
      </table><br><br>
    </div>
  </div><br><br><br>

  <div class="area">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <script src="<?php echo base_url(); ?>/assets/js/slideNav.js" type="text/javascript"></script>
  <script>
    window.slide = new SlideNav({
      changeHash: true
    });
  </script>

</body>

</html>