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
    .container-form{
        margin-left: 80%;
        border-radius: 30px;
        background: #FFFFFF;
    }
    input[type=text],
    input[type=password] {
        width: 100%;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 20px;
        padding: 5px;
        margin-bottom: 8px;
    }
    button:hover {
        opacity: 0.8;
    }
    .container {
        padding: 5px;
    }
    .btnlogin{
        float: right;
        border-radius: 30px;
        width: 90px;
        margin-top: 10px;
        background : #5088CA;
        font-weight : bold;
    }
.tab-content{
  position: center;
  width: 1009px;
  height: 1000px;
  margin-top: 60px;
  background: #fff;
  color: #000;
  border-radius: 30px;
  z-index: 1000;
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
  padding : 15px;
}
</style>

<body>
<div class="container">
    <center>
    <div class="tab-content grid">
        <img src="<?php echo base_url('/assets/image/profil.png'); ?>" alt="">
        <div id="home" class="container tab-pane active"><br>
        <form>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">FIRST NAME</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">AGAMA</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">TTL</label>
            <div class="col-sm-10">
            <select class="form-control form-control-sm" id="colFormLabelSm" style="border-radius: 20px;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">GENDER</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">BANDUNG ADDRESS</label>
        <div class="col-sm-10">
            <!-- <input type="text" class="form-control form-control-sm" id="colFormLabelSm"> -->
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ALAMAT ASAL</label>
        <div class="col-sm-10">
            <!-- <input type="text" class="form-control form-control-sm" id="colFormLabelSm"> -->
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CONTACT PERSON</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">EMAIL</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">PERTANYAAN KEAMANAN</label>
        <div class="col-sm-10">
            <!-- <input type="text" class="form-control form-control-sm" id="colFormLabelSm"> -->
            <select class="form-control form-control-sm" id="colFormLabelSm" style="border-radius: 20px;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">JAWABAN</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
        </div>
                    <!-- <label for="uname"><b>NIM</b></label>
                    <input type="text" placeholder="Masukkan NIM" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Masukkan Password" name="psw" required> -->

                    <button type="submit" class="btn btn-sm btnlogin" style="width: 200px;">Update Profil</button>
            </form>
        </div>
    </div>
    </center>
</div>



</body>

</html>
