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

<script>
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

<body>
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
    <div class="container" id="conGrafikNilai" style="margin-top: 30px;">
        <br><br>
        <h4 style="margin-left: 70px;"><b>Grafik Nilai</b></h4>
        <br>
        <div id="resizable" style="height: 300px; width: 900px; margin: auto">
            <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
        </div>
    </div>

    <div class="container" id="conKeterangan">
        <br><br>
        <h4 style="margin-left: 70px;"><b>Keterangan</b></h4>
        <br>
        <table class="table table-hover">
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
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>