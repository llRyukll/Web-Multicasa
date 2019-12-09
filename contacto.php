<!DOCTYPE html>
<html>
<head>
    <title>Contactanos</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilosAltaInmueble.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/buttons.dataTables.min.css"> 

</head>
<body>
    <div class="container">
        <div class="contenedor">
            <header class="header">
                <div class="logo-empresa">
                    <img class="logotipo" src="images/logo.png" style="width: 48%">
                    <img class="tel" src="images/tel.png" style="width: 18.3%">
                </div>
                <div class="menuHorizontal">
                    <ul class="topnav">
                        <li class="derecha"><a href="inicio_publico.php">Inicio</a></li>
                        <li class="derecha"><a href="#">La Compañia</a></li>
                        <li class="derecha"><a href="#">Servicios</a></li>
                        <li class="derecha"><a href="#">Requisitos</a></li>
                        <li class=" izquierda"><a href="login.php"><img class="incono-verde"src="images/icono_verde.png" >Admin.</a></li>
                        <li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Buscar</a></li>
                        <li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Inicio</a></li>
                    </ul>
                </div>
            </header>
            <div class="contenido">
                <div class="col-12 col-md-12 col-lg-12 py-3" id="main">
    <form action="mail.php" method="post">
        <div class="card border-primary rounded-0">
            <div class="card-header p-0">
                <div class="bg-info text-white text-center py-2">
                    <h2 style="font-size: 40px"><i class="fa fa-envelope"></i> Contáctanos</h2>
                    <h4 style="padding: 0; text-align: center">Con gusto te ayudaremos</h4>
                </div>
            </div>
            <div class="card-body p-3">

                <!--Body-->

                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                        </div>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                        </div>
                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                        </div>
                        <textarea class="form-control" placeholder="Envíanos tu Mensaje" name = "mensaje" required></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                </div>
            </div>

        </div>
    </form>
    <br>

</div>
            </div>

            <footer class="footer">
                <div class="logo-empresa">
                    <img class="logo" src="images/logotipo.png">
                </div>
                <div class="menuFooter">
                    <ul class="topnav">
                        <li class="derecha"><a href="#">Inicio</a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Compra </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Construir </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Venta </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Mudanzas </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Seguros </a></li>
                        <h5 class="fotterh5">:</h5>
                        <li class="derecha"><a href="#"> Contactos </a></li>
                        <div class="copyright">
                            <p>Bienes Raíces Multicasa © 2019</p>
                            <a href="">Politicas De Privacidad</a>              
                        </div>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!-- --------------------------Scripts ------------------------------ -->

    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/js/dataTables.bootstrap.js"></script>

    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.flash.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
</body>
</html>