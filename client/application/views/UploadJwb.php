<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="assets/css/UploadJwb.css"> -->
    <style>
      .button{
          width: 144px;
          height: 40px;
          border-radius: 15px;
        }

      .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
        margin-left:300px;
        margin-top: 40px;
        }
        .form{
            color: black ;
        }
        .box{
            background-color :  #fff;
            width: 518px;
            height: 540px;
            box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
            border-radius: 30px;
        }
        .box-1{
          margin-top:-10px; 
        }
        table{
            margin-top : 50px;
            margin-left:20px;
        }
        .row{
            margin-right:50px;
            float:right;
            margin-top:100px;
        }
        p{
            position: absolute;
            width: 291px;
            height: 48px;
            margin-left:20px;
            margin-top:40px;
            font-family:roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;

            color: #2D2D2F;
        }
        .mk{
            margin-left:30px;
        }
        select{
            width: 230px;
            height: 30px;
            left: 641px;
            top: 364px;

            background: #FFFFFF;
            border: 1px solid #FFFFFF;
            box-sizing: border-box;
            box-shadow: inset 0px 10px 35px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }
        .kd{
            width: 230px;
            height: 30px;
            left: 641px;
            top: 364px;
            margin-left:30px;
            background: #FFFFFF;
            border: 1px solid #FFFFFF;
            box-sizing: border-box;
            box-shadow: inset 0px 10px 35px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }
        .kd:hover{
            color:white;
            cursor: pointer;
         }
         .mk:hover{
            cursor: pointer;
         }
         
  </style>

    <title>UploadJawaban</title>
</head>
<body background-color: #B3ADAD;
    background-attachment: fixed !important;
    background-size: cover; >
    <!-- <div class="container"> -->
    <div class="row">
       <div class="box">
        <div class="col align-self-center ">
        <p>Form Upload Jawaban</p>
        <font size="+2" ></font>
        <br /><br />
        <form action="#">
        <!-- <form-container> -->
        <table>
            <tr>
                <td id="indeks"><label for="praktikum"><b>Praktikum</b></label></td>
                <td><label class="mk"><b>Pemrograman Berbasis Obyek</b></label></td>
            </tr>
            <tr>
                <td id="indeks"><label for="modul"><b>Modul </b></label></td>
                <td>
                <select class="mk" name="Modul 10">
                        <option>Modul 1</option>
                        <option>Modul 2</option>
                        <option>Modul 3</option>
                        <option>Modul 4</option>
                        <option>Modul 5</option>
                        <option>Modul 6</option>
                        <option>Modul 7</option>
                        <option>Modul 8</option>
                        <option>Modul 9</option>
                        <option>Modul 10</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td id="indeks"><label for="kelas"><b>Kelas</b> </label></td>
                <td><label class="mk"><b>IF-41-10</b></label></td>
            </tr>
            <tr>
                <td id="indeks"><label for="JDWL"><b>Jadwal Praktikum</b></label></td>
                <td><label class="mk"><b>09:30- 12:30</b></label></td>
            </tr>
            <tr>
                <td id="indeks"><label for="Asprak"><b>Asprak </b></label></td>
                <td><label class="mk"><b>Febiana Anistya</b></label></td>
            </tr>
            <tr>
                <td id="indeks"><label for="tes"><b>Tes/Jurnal</b></label></td>
                <td>
                    <select class="mk" name="tes">
                        <option>Tes Awal</option>
                        <option>Jurnal</option>
                        <option>Tes Akhir</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td id="indeks"><label class="kode"><b>Kode Autentifikasi</b> </label></td>
                <td ><input class="kd"  type="text" name="kode"></td>
            </tr>  
            <tr>
                <td id="indeks"><label for="kode"><b>NIM</b> </label></td>
                <td><label class="mk"><b>1301174028</b></label></td>
            </tr>      
            <tr>
                <td id="indeks"><label for="file"><b>Upload File </b></label></td>
                <td><input class="mk"  type="file" name="file" id="file" accept="image/jpeg, image/gif"/></td>
            </tr>      
        </table> 
        <button type="button" class="btn btn-primary rounded-pill " href="#">Upload Jawaban</button>  
        </form>
        </div>
      </div>
      <div class="box-1">
            <div class="col align-self-end">
            <img src="assets/image/ATURAN.png" alt="Avatar" class="image" >
            </div>
        </div>
        </div>
    <!-- </div> -->
    
</body>
</html>