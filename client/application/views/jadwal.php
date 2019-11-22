<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="<?=base_url()?>assets/fontawesome/css/all.css" rel="stylesheet" type="text/css"/>
    
    <style>
        body {
        margin: 0;
        font-family: "Lato", sans-serif;
        }

        .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #1e1e1e;
        position: fixed;
        height: 100%;
        overflow: auto;
        }

        .sidebar a {
        display: block;
        color: #fff;
        padding: 16px;
        text-decoration: none;
        }
        
        .sidebar a.active {
        background-color: #353537;
        color: #E2D134;
        }

        .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
        }

        div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
        }

        @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
        }
        .sidebar .header{
          /* IMPULSE */
          font-family: Segoe UI;
          font-style: normal;
          font-weight: bold;
          font-size: 26px;
          line-height: 48px;
          /* identical to box height */
          color: #D74129;
          text-align: center;
          padding: 16px 0 0 0;
        }
        .judul{
          width: 500px;
          height: 50px;
          font-size: 18px;
          font-weight: bold;
          border: 1px solid #000;
          border-radius: 40px;
          background: #1e1e1e;
          padding: 10px;
          color: #fff;
          margin: 0 auto;
          margin-top: 50px;
        }
        #konten{
          padding-top: 20px;
        }
        .drpdwn{
          background: #1e1e1e;
          border-radius: 40px;
          float:right;
        }
        /*tabel*/
        table, td, th {  
          border: 1px solid #1B1818;
          box-sizing: border-box;
          text-align: center;
          box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
        }

        table {
          border-collapse: collapse;
          width: 100%;
        }
        th{
          background : #C4C4C4;
        }

        th, td {
          padding: 15px;
        }
        .tabel{
          padding-top :20px;
        }
        .tabelkonten{
          margin-top: 50px;
        }
    </style>
</head>
<body>
  <div class="sidebar">
    <p class="header">IMPULSE</p>
    <a href="#home"><i class="fas fa-home"></i> Home</a>
    <a href="#news"><i class="fas fa-sticky-note"></i> Nilai</a>
    <a class="active" href="#news"><i class="fas fa-calendar-alt"></i> Jadwal</a>
    <a href="#contact"><i class="fas fa-cloud-upload-alt"></i> Upload Jawaban</a>
    <a href="#about"><i class="fas fa-folder-open"></i> Data IFLAB</a>
  </div>
              
  <div class="content" id="konten">

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle drpdwn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aria Fajar <i class="fas fa-user"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Logout</a>
            
          </div>
        </div>

    <div class="judul text-center">Jadwal Praktikum</div>
    <div class="tabelkonten">
      <table>    
        <tr>
          <th>Waktu</th>
          <th>Senin</th>
          <th>Selasa</th>
          <th>Rabu</th>
          <th>Kamis</th>
          <th>Jumat</th>
          <th>Sabtu</th>
        </tr>
        <tr>
          <td>06.30 - 09.30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>09.30 - 12.30</td>
          <td>IF-41-12</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>12.30 - 15.30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>15.30 - 18.30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      
      </table>
    </div>
  </div>
</body>
</html>