<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Stylesheets -->
     <link rel="stylesheet" href="/css/all.min">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/history.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/upload.css">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/nilai.css">
    <style>
    body{
        background-color:#F3F2F2;
        background-attachment: fixed !important;
        background-sizecover;
        font-family:'Roboto',sans-serif;
        }
        .nav-pills{
        width: 342px;
        margin-left:-80px;
        }
        .nav-item{
        width: 50%;
        }
        .nav .nav-link{
        border-radius: 30px;
        height: 46px;
        margin-top: 60px;
        }
        .nav-pills .nav-link{
        font-weight: bold;
        text-align: center;
        background: #343436;
        color: #fff;
        }
        .nav-pills .nav-link.active{
        background: #fff;
        color: #000;
        top:15px;
        }
        .new{
            margin-left: 460px;
        }
        
      .button{
          width: 50px;
          height: 60px;
          border-radius: 15px;
         
        }
        .nav {
            margin-left: 400px;
            margin-top: 50px;
            background: #353537;
            box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
            border-radius: 30px;
            width: 242px;
            height: 37px;
            position: absolute;
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

        .drpdwn{
          background: #1e1e1e;
          border-radius: 30px;
          float:right;
          font-family:'roboto',sans-serif;
          margin-right:55px;
          margin-top:-10px;
          width: 100px;
          height: 35px;
          position: absolute;
        }
        .box{
            background-color :  #fff;
            width: 900px;
            height: 600px;
            box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
            border-radius: 30px;
            margin-top:70px;
        }
        .row{
            margin-right:50px;
            float:right;
            margin-top:90px;

        }
        .mk{
            margin-top:10px;
            margin-left:10px;
            font-family:'roboto',sans-serif;
            background-color: #C4C4C4;
            width: 270px;
            height:30px;
            border-radius: 30px;
        }
        option{
            border-radius: 30px;
        }
        .box-1 img{
          margin-top:60px;
          width: 500px;
          height: 400px;
        }

        
    </style>
    <title>History Upload</title>
</head>
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

    <!-- Nav pills -->
<div class="header">
    <!-- ini navbar -->
  <div class="nav">
    <nav>
      <a class="" href="#upload">Upload Jawaban</a>
      <a class="active" href="#History" style="margin-left: 3.5px">History Jawaban</a>
    </nav>
  </div>
  <!-- ini dropdown -->
  <div class=" dropdown">
    <button class="btn btn-secondary dropdown-toggle drpdwn" type="button" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 30px; height: 45px;width: 226px;">
         Anasya Wulandari<span> <i class="fas fa-user"></i></span>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Profil</a>
        <a class="dropdown-item" href="#">Logout</a>
    </div>
  </div>
  <div class="row">
        <div class="box">
            <div class="col align-self-center ">
                        <select class="mk" name="Matkul">
                                <option>Pemrograman Berorientasi Obyek</option>
                                <option>Jaringan Komputer</option>
                        </select> 
            </div>
            <div class="box-1" style="">
            <div class="col align-self-center">
            <img src="<?php echo base_url('/assets/image/history.png'); ?>" class="image" >  
            </div>
        </div>
      </div>
</div>
            
   
</body>
</html>