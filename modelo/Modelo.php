<?php



class Modelo {
    protected $conexion;
    private $bd = "hotel";
    private $user = "root";
    private $password = "";

    public function __construct() {
        $this->conexion = new PDO('mysql:host=localhost;dbname=' . $this->bd, $this->user, $this->password);
        $this->conexion->exec("set character set utf8");
    }

    public function cerrarConexion() {
        $this->conexion = null;
    }

    public function consultarServicios($cantidad = 3) {
        $cantidad = (int) $cantidad;
        $sentencia = $this->conexion->prepare("SELECT * from servicios order by id_servicio desc limit " . $cantidad);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarGaleria($cantidad = 6) {
        $cantidad = (int) $cantidad;
        $sentencia = $this->conexion->prepare("SELECT * from galeria order by idGaleria desc limit " . $cantidad);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function obtenerImagen($id) {
        $sentencia = $this->conexion->prepare("SELECT * from galeria where idGaleria=?");
        $sentencia->bindParam(1, $id);
        $sentencia->execute();
        foreach ($sentencia->fetchAll(PDO::FETCH_ASSOC) as $imagenUnica) {
            return $imagenUnica;
        }
        
    }
    
    public function consultarUsuario($usuario, $password){
        $sentencia = $this->conexion->prepare("SELECT * from admin where usuario= ? and password= ?");
       
        $sentencia->bindParam(1, $usuario);
        $sentencia->bindParam(2, $password);
        $sentencia->execute();
        foreach ($sentencia->fetchAll(PDO::FETCH_ASSOC)as $persona){
            return $persona;
        }
    }
   

    

    public function insertarFormulario($nombre, $apaterno, $amaterno, $email, $telefono, $direccion, $ciudad, $pais, $postal, $fechaLlegada, 
                                             $Nnoches, $Nhabitaciones, $NhuespedesA, $NhuespedesN, $Thabitacion, $comentario){
        $sentencia= $this->conexion->prepare("INSERT INTO formulario (nombre,apaterno,amaterno,email,telefono,direccion,ciudad,pais,postal,"
                . "fechaLlegada,Nnoches,Nhabitaciones,NhuespedesA,NhuespedesN,Thabitacion,comentario) VALUES "
                . "(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->bindParam(1, $nombre);
        $sentencia->bindParam(2, $apaterno);
        $sentencia->bindParam(3, $amaterno);
        $sentencia->bindParam(4, $email);
        $sentencia->bindParam(5, $telefono);
        $sentencia->bindParam(6, $direccion);
        $sentencia->bindParam(7, $ciudad);
        $sentencia->bindParam(8, $pais);
        $sentencia->bindParam(9, $postal);
        $sentencia->bindParam(10, $fechaLlegada);
        $sentencia->bindParam(11, $Nnoches);
        $sentencia->bindParam(12, $Nhabitaciones);
        $sentencia->bindParam(13, $NhuespedesA);
        $sentencia->bindParam(14, $NhuespedesN);
        $sentencia->bindParam(15, $Thabitacion);
        $sentencia->bindParam(16, $comentario);
        return $sentencia->execute();
    }
    
    public function insertarMensajes($nombre,$email,$telefono,$mensaje){
        $sentencia = $this->conexion->prepare("INSERT INTO comentarios (
            nombre,correo,comentario) values (?,?,?)");
        $msj=($telefono ."<br>".$mensaje);
        $sentencia->bindParam(1, $nombre);
        $sentencia->bindParam(2, $email);
        $sentencia->bindParam(3, $msj);
        return $sentencia->execute();
    }
    
    
}

