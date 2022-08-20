<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<style>
body {
display: flex;
min-height: 100vh;
flex-direction: column;
}

main {
flex: 1 0 auto;
}

body {
   background-image: url("fondo.png");
    background-size: cover;
}

.input-field input[type=date]:focus + label,
.input-field input[type=text]:focus + label,
.input-field input[type=email]:focus + label,
.input-field input[type=password]:focus + label {
color: #1e40e9;
}

.input-field input[type=date]:focus,
.input-field input[type=text]:focus,
.input-field input[type=email]:focus,
.input-field input[type=password]:focus {
border-bottom: 2px solid #1e51e9;
box-shadow: none;
}
</style>
</head>

<body>
<div class="section"></div>
<main>
    <center>
        <img class="responsive-img" style="width: 250px;" src="https://practipasta.weebly.com/uploads/3/1/5/6/31560323/img-20200108-wa0009_orig.jpg" />
        <div class="section"></div>

        <h5 class="indigo-text">Por favor ingrese la información</h5>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email' id='email' />
                            <label for='email'>Ingresa tu correo</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password' id='password' />
                            <label for='password'>Ingresa tu contraseña</label>
                        </div>
                        <label style='float: right;'>
                            <a class='blue-text' href='#!'><b>olvidaste la contraseña?</b></a>
                        </label>
                    </div>

                    <br />

                    <center><BR>
                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Iniciar sesion</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <div class="fixed-action-btn horizontal click-to-toggle">
            <a class="btn-floating btn-large red">
                <i class="material-icons">menu</i>
            </a>
            <ul>
                <li>
                    <a class="waves-effect waves-light btn-floating social instagram"><i class="fa fa-instagram"> F</i></a>
                </li>
                <li>
                    <a class="waves-effect waves-light btn-floating instagram"><i class="fa fa-instagram">T</i></a>
                </li>
                <li>
                    <a class="waves-effect waves-light btn-floating instagram"><i class="fa fa-instagram">I</i></a>
                </li>
            </ul>
        </div>

    </center>
    <center>
        <footer class="footer" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; Desarrollado por  <a href=""> SAEP GRUP</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            </footer>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
