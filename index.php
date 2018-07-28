
<?php
include_once './modelo/Modelo.php';
include_once './logica/FrontEnd.php';
$FE=new FrontEnd();
 echo $FE->procesarFormulario();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
    echo $FE->libreriasHeader();
    ?>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" >
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

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url('http://www.miamitodaynews.com/wp-content/uploads/2017/08/poolside-BBQ.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://s-ec.bstatic.com/images/hotel/max1024x768/298/29838178.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('http://cdn.traveler.es/uploads/images/thumbs/201148/hot_list_2011_243633068_966x487.jpg')">
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
    </header>

    <!-- Page Content -->
    <div class="container">
        
        <div class="row" style="position: relative;top: 3em">
            <div class="col-lg-6">
                <h1><b>HOTEL TEHUACÁN</b></h1>
                <h3>INFORMACIÓN</h3>
                
                <p>El Hotel Tehuacán está situado en la avenida principal de Tehuacán Puebla, la Avenida Independencia. <br>
                Los representantes de nuestra agencia de viajes están a sus órdenes para ayudarle a organizar excursiones o reservaciones para otros eventos especiales.
                <br>Puede disfrutar ahí mismo, en el soleado patio de la alberca o en la comodidad de su habitación. Para quienes llegan a Tehuacán en 
                su propio vehículo, el hotel cuenta con estacionamiento.
                </p>
                 <h2>Galería</h2>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" style="width: 550px;height: 280px" src="http://hotelfornepal.com/wp-content/uploads/2015/02/luxury-hotel-HD-Wallpapers-1.jpg" alt="">
                
                
            </div>
            
            
        </div> 
        
        
       

        <!-- Marketing Icons Section -->

        <div class="row" style="position: relative;top: 3em">
            
            <?php
            
            echo $FE->galeria();
            ?>

        </div>
        
        
            
        <hr>

    </div>


    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
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
