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
    body {
        background: url(assets/image/backgroundLogin.png);
        background-repeat: no-repeat;
        background-size: auto;
        background-position: 0 -70px;
    }

    #logoIF {
        position: absolute;
        width: 522px;
        height: 476px;
        margin-top: 15%;
        margin-left: 20%;
    }

    #rectangle {
        position: fixed;
        width: 64px;
        height: 1000px;
        left: 0px;
        top: 0px;

        background: #1E1E1E;
        box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
    }

    /* Bordered form */
    .container-form{
        margin-left: 80%;
        border-radius: 30px;
        background: #FFFFFF;
    }
    form {
    }

    /* Full-width inputs */
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

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Extra style for the cancel button (red) */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Add padding to containers */
    .container {
        padding: 5px;
    }

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
    .login{
        
        float: right;
        margin-right: 5%;
        margin-top: 170px;
    }
    .btnlogin{
        float: right;
        border-radius: 30px;
        width: 90px;
        margin-top: 10px;
        background : #5088CA;
        font-weight : bold;
    }

    .nav-pills{
  width: 450px;
}
.nav-item{
  width: 50%;
}
.nav .nav-link{
  border-radius: 30px;
  height: 100px;
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
}
.tab-content{
  position: absolute;
  width: 450px;
  height: 300px;
  margin-top: -60px;
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
  <div class="content">
  <!-- Nav pills -->
  <div class="login">
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Praktikan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1">Asprak</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
        <form action="action_page.php" method="post">
                    <label for="uname"><b>NIM</b></label>
                    <input type="text" placeholder="Masukkan NIM" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Masukkan Password" name="psw" required>

                    <button type="submit" class="btn btn-sm btnlogin">Login</button>
            </form>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
        <form action="action_page.php" method="post">
                    <label for="uname"><b>NIM</b></label>
                    <input type="text" placeholder="Masukkan NIM" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Masukkan Password" name="psw" required>

                    <button type="submit" class="btn btn-sm btnlogin">Login</button>
            </form>
        </div>
    </div>
    </div>
  </div>
</div>

    <div id="rectangle">
    </div>
    
    

</body>

</html>