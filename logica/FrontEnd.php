<?php


class FrontEnd {
    private $modelo;
    
    public function __construct() {

        $this->modelo = new Modelo();
    }

    public function libreriasHeader() {
        return'<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Modern Business - Start Bootstrap Template</title>
        <link  href="css/estilo.css" rel="stylesheet">
       <link href="boots/bootstrap/css/bootstrap.min.css" rel="stylesheet">
       <link href="css/modern-business.css" rel="stylesheet">';
    }

    public function imagenH() {
        return'<a class="navbar-brand" href="index.html" ><img src="imagenes/Hotel.png" style="height: 70px;width: 70%" ></a>';
    }

    public function menu() {
        return '<ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_2.php">Habitaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index_3.php">Reservaciones</a>
            </li>
            </ul>';
    }

    public function servicios() {

        $team = $this->modelo->consultarServicios();
        $acu = "";
        foreach ($team as $t) {
            $acu = $acu . '<div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="' . $t["imagen"] . '" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">' . $t["nombre"] . '</a>
                        </h4>
                        <p class="card-text">' . $t["descripcion"] . '</p>
                    </div>
                </div>
            </div>';
        }
        return $acu;
    }
    
    
    
    public function galeria() {
        $team= $this->modelo->consultarGaleria();
        $acu = "";
        foreach ($team as $t) {
            $acu = $acu .'<div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="imagenes.php?ide='.$t['idGaleria'].'">'
                    . '<img class="card-img-top" src="'.$t["URL"] . '" alt=""></a>
                </div>
            </div>
            
            ';
        }
        return $acu;
    }
    
    public function imagen($ide) {
        $t = $this->modelo->obtenerImagen($ide);

        return '<div class="col-lg-6 " style="position:relative;top:10em">
                <div class="card h-100">
                    <img class="card-img-top " src="' . $t["URL"] . '" alt=""></a>
                        
                </div>
            
            </div>
            <div class="col-lg-6 " style="position:relative;top:10em">  
            <p>' . $t['descripcion'] . '</p>
           </div>'
        ;
    }

    public function procesarFormulario() {
        if (isset($_POST["nombre"]) && isset($_POST["apaterno"]) && isset($_POST["amaterno"]) && isset($_POST["email"]) && isset($_POST["telefono"]) &&
                isset($_POST["direccion"]) && isset($_POST["ciudad"]) && isset($_POST["pais"]) && isset($_POST["postal"]) && isset($_POST["fechaLlegada"]) && isset($_POST["Nnoches"]) &&
                isset($_POST["Nhabitaciones"]) && isset($_POST["NhuespedesA"]) && isset($_POST["NhuespedesN"]) && isset($_POST["Thabitacion"]) && isset($_POST["comentario"])) {
            header("location:index.php");
                }else {
                    echo "<script>alert (no accede)</script>";
                }
                
    }
  
    }
    
