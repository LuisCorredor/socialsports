<!DOCTYPE html>
<html>

<head>
    <title>Social Sport</title>
    <!-- colos smarthphone -->
    <meta name="theme-color" content="#ededed">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
</head>

<body>
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="card cardlogin">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="col s12">
                                <center>
                                    <img src="img/user.png" class="useracount">
                                </center>
                            </div>
                            
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_prefix" type="email" class="validate">
                                <label for="icon_prefix">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="icon_telephone" type="password" class="validate">
                                <label for="icon_telephone">Contraseña</label>
                            </div>

                            <div class="col s12">
                                <center>
                                    <a class="blue btn" href="dashboard.html">Ingresar</a>
                                </center>
                                <br>
                                <center>
                                    <a class="blue-text" href="registrar.html">Registrar</a>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer transparent">
        <div class="footer-copyright">
            <div class="container grey-text">
                Social Sports
            </div>
        </div>
    </footer>
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".button-collapse").sideNav();
        })

    </script>

</body>

</html>
