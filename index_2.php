<?php
include_once './modelo/Modelo.php';
include_once './logica/FrontEnd.php';
$FE=new FrontEnd();
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        echo $FE->libreriasHeader();
        ?>
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>
        <section class="brands fondo2" style="background-image: url('https://es.habcdn.com/photos/business/big/menjador-area-lacat-gris-clar-fosc-mate_150228.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            <b>Habitaciones</b>
                        </h1>

                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </section>

        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <?php
                echo $FE->imagenH();
                ?>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                    echo $FE->menu();
                    ?>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            <h1 class="my-4"></h1>

            <!-- Marketing Icons Section -->

            <div class="row" style="position: relative;top: 3em">
                <div class="col-lg-6">
                    <h2>Habitaciones del Hotel Tehuacán</h2>
                    <p>Disponemos de 20 confortables habitaciones,con limpieza absoluta y muy buen mantenimiento.</p>
                    <ul>
                        <h4>Tenemos de 1 y 2 camas matrimoniales, todas cuentan con:</h4>
                        <li>Aire acondicionado</li>
                        <li>Televisión a color por cable.</li>
                        <li>Internet inalámbrico sin costo.</li>
                        <li>Teléfono</li>
                        <li>Baño individual con regadera</li>
                    </ul>
                </div>

                <div class="col-lg-6" >
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">

                            <div class="carousel-item active sleader2" style="background-image: url('http://nuestrasnoticiasnacional.com/wp-content/uploads/2018/03/foto_habitacion_doble.jpg')">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <!-- Slide Two - Set the background image for this slide in the line below -->
                            <div class="carousel-item sleader2" style="background-image: url('https://s-media-cache-ak0.pinimg.com/originals/c7/4c/98/c74c98762b8bdb5a6736ec72302c579b.jpg')">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item sleader2" style="background-image: url('http://gianguyenfurniture.com/wp-content/uploads/2016/09/1444961880-noi-that-phong-ngu.jpg')">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                                           
                </div>
                                        
            </div>     
            

            <div class="row" style="position: relative;top: 3em">
                
                <?php
                echo $FE->servicios();
                ?>
            </div>


        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark" style="position: relative;top: 3em">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="boots/jquery/jquery.min.js"></script>
        <script src="boots/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
