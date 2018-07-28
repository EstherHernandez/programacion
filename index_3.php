
<?php session_start();
include_once './modelo/Modelo.php';
include_once './logica/FrontEnd.php';
$FE = new FrontEnd();
echo $FE->procesarFormulario();
?>
<!DOCTYPE html>

<html>
    <head>
        <?php
        echo $FE->libreriasHeader();
        ?>
        
    </head>
    <body>

        <section class="brands fondo2" id="color" style=" background-image: url('https://previews.123rf.com/images/alexkich/alexkich1709/alexkich170902659/87103725-silver-bell-and-the-key-at-the-reception-in-the-hotel-on-a-black-background.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            <b>Reservaciones</b>
                        </h1>

                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </section>



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

        <!-- Form -->
        <section class="Form-sec" style="position: relative;top: 3em"  >
            <div class="container"  style="border: solid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full-sec rate-sec">
                        <h1 style="text-align: center">FORMULARIO</h1>
                        <div class="col-xs-12 col-sm-12 form-detail">
                            <form method="post" action="index_3.php">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre(s)</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Enter Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="apaterno">Apellido Paterno</label>
                                    <input type="text" name="apaterno" class="form-control" id="apaterno" placeholder="Enter Lastname" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="amaterno">Apellido Materno</label>
                                    <input type="text" name="amaterno" class="form-control" id="amaterno" placeholder="Enter Lastname2" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail*</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telefono">Telefono*</label>
                                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Enter Phone" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="direccion">Dirección*</label>
                                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Enter Address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="Enter City" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pais">País*</label>
                                    <input type="text" name="pais" class="form-control" id="pais" placeholder="Enter Country" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="postal">Dirección Postal</label>
                                    <input type="text" name="postal" class="form-control" id="postal" placeholder="Enter Postal Code" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Fecha de reservacion</label>
                                    <input type="date" name="fechaLlegada" class="form-control" id="fechaLlegada" placeholder="date" required>
                                </div>
                              
                                
                                
                                <div class="form-group col-md-6">
                                    <label  for="Nnoches">Numero de Noches</label>
                                    <input id="Nnoches" name="Nnoches" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="Nhabitaciones">Numero de habitaciones</label> 
                                    <input id="Nhabitaciones" name="Nhabitaciones" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                               
                                <div class="form-group col-md-6 ">
                                    <label for="NhuespedesA">Número de huespedes adultos</label> 
                                    <input  name="NhuepedesA" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="NhuespedesN">Número de huespedes niños </label>
                                    <input  name="NhuespedesN" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="TipoH">Tipo de habitaciones </label>
                                    <input  name="Thabitacion" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                                
                                <div class="form-group text-ara">
                                    <label for="comentario"> Comentario </label>
                                    <textarea name="comentario"  rows="4" cols="50"></textarea>
                                </div>
                                <div class="send-btn col-md-6" style="text-align: right">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Enviar</button>
                                    <div class="clearfix"></div>
                                    
                                </div>	
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
            <?php
        
        ?>
            
        </section>	

         <footer class="py-5 bg-dark" style="position: relative;top: 5em">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
            </div>
            <!-- /.container -->
        </footer>

        	   

    </body>
</html>
