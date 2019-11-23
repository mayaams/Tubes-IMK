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
                        y: 75
                    },
                    {
                        label: "Modul 2",
                        y: 99
                    },
                    {
                        label: "Modul 3",
                        y: 80
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
.section {
  min-height: 800px;
  position: relative;
  text-align: center;
  font-family: sans-serif, arial;
  margin: 0;
}

h1, p {
  margin: 0;
  font-family: sans-serif, arial;
  font-weight: bold;
}

.text-wr {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

#section1 {
  background: #5c53aa;
  color: #8d86c3;
}

#section2 {
  background: #4bbfc3;
  color: #81d2d5;
}

#section3 {
  background: #283044;
  color: #686e7c;
}

#section4 {
  background: #ebf5ee;
  color: #aeb9b9;
}

h1 {
  font-size: 50px;
  margin-bottom: 25px;
}

.title-top {
  font-size: 60px;
  padding-bottom: 30px;
}

.title-bottom {
  font-size: 30px;
}

.title-tx {
  font-size: 20px;
  opacity: 0.8;
}

.nav {
  margin-left: 40%;
}

.nav a {
  padding: 7px 20px;
  border-radius: 7px;
  margin-right: 10px;
  background: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -ms-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  text-decoration: none;
  color: black;
  font-family: sans-serif, Roboto;
  font-weight: 100;
}

.nav a.active {
  background: rgba(0, 0, 0, 0.5);
  color: white;
}

.nav a:hover {
  background: rgba(255, 255, 255, 0.7);
}

.fork-wr img {
  position: fixed;
  z-index: 99;
  top: 0;
  right: 0;
  border: 0;
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
            <img id="iconsiderbar" src="<?php echo base_url('/assets/image/data.png'); ?>" style="margin-left: -20px;"">
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
    <div class="nav" style="margin-left: 400px; margin-top: 100px;">
          <nav>
              <a href="#conGrafikNilai">Grafik Nilai</a>
              <a href="#conKeterangan">Keterangan</a>
          </nav>
      </div>

    <div class="dropdown" style="margin-top: 209px; margin-left: 470px">
        <span><b style="font-size: 18px;">Praktikum</b></span>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">
            Pemrograman Berorientasi Objek (PBO)
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Pemrograman Berorientasi Objek (PBO)</a>
            <a class="dropdown-item" href="#">Jaringan Komputer (JRK)</a>
        </div>
    </div>



    <!-- ini bagian nilai -->
    <div class="container" id="conGrafikNilai" style="margin-top: 30px;">
        <br><br>
        <h4 style="margin-left: 70px;"><b>Grafik Nilai</b></h4>
        <br>
        <div id="resizable" style="height: 300px; width: 900px; margin: auto">
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
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Yayan Prima</td>
                        <td>26/09/2019</td>
                        <td>10</td>
                        <td>60</td>
                        <td>5</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Yayan Prima</td>
                        <td>03/10/2019</td>
                        <td>10</td>
                        <td>60</td>
                        <td>5</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table><br><br>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/js/slideNav.js" type="text/javascript"></script>
    <script>
	    window.slide = new SlideNav({
		changeHash: true
	    });
    </script>

</body>

</html>
