<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/all.min">

    <title>Sidebar</title>
  </head>
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
          <img id="iconsiderbar" src="<?php echo base_url('/assets/image/data.png'); ?>" style="margin-left: -20px;"">
          <li><b>Data IFLAB</b></li>
        </ul>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<style>
  /* {margin: 0px;
  padding: 0px; */
  /* font-family:  */
  /* } */
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
  /* ul li img{
    width: 18px;
    height: 18px;
    background-repeat: no-repeat;
    background-position: center;
    display: inline-block;
    margin-bottom: -3px;
    margin-right: 12px;
  } */
  #iconsiderbar{
    /* margin-top: 30px; */
    position: relative;
    top: 60px;
    right: -24px;
    padding: 12px;
  }
</style>
