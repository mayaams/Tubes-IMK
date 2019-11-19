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
        position: relative;
        width: 1440px;
        height: 831px;
        background: linear-gradient(269.31deg, #C4C4C4 0.27%, #FFFFFF 99.59%);
        ;
    }

    #logoIF {
        position: absolute;
        width: 522px;
        height: 476px;
        margin-top: 15%;
        margin-left: 20%;
    }

    #rectangle {
        position: absolute;
        width: 64px;
        height: 969px;
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
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
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
</style>

<body>
    <div id="rectangle">
    </div>

    <img id="logoIF" src="assets/image/logoIFLAB.png" alt="logo IFLAB">

    <div class="container-form" style="width: 500px">
        <form action="action_page.php" method="post">
            <div class="container">
                <label for="uname"><b>NIM</b></label>
                <input type="text" placeholder="Masukkan NIM" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Masukkan Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

</body>

</html>