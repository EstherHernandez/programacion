<!DOCTYPE html>
<?php
include_once './modelo/Modelo.php';
include_once './logica/FrontEnd.php';
$FE=new FrontEnd();
$ide="";
if(isset($_GET["ide"])){
    $ide=$_GET["ide"];
}
?>

<html>
    <head>
        <?php
        echo $FE->libreriasHeader();
        ?>
        
    </head>
    <body>
         
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
        
      </div>
    </nav>
        
        
        <section class="navbar " style="height: auto">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php
                        echo $FE->imagen($ide);
                        ?>
                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
            
<!--            <div class="col-lg-4 col-sm-6 portfolio-item " style="align-content: ">
                <div class="card h-100  ">
                    <a href="imagenes.php?ide='.$t['idGaleria'].'">'
                    . '<img class="card-img-top" src="'.$t[URL] . '" alt=""></a>
                </div>
            </div>
            -->
        </section>
    </body>
</html>
