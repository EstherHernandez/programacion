<?php




class BackEnd {
    private $modelo;
    
    public function __construct() {

        $this->modelo = new Modelo();
    }

    public function acortarTexto($texto,$caracteres) {
        return substr($texto,0, $caracteres).'...';
    }

    public function mensaje($msj) {
        return "<script>alert('".$msj."')</script>";
    }

    public function siAutentificado() {
        if(isset($_SESSION["usuario"])){
            return true;
        } else {
            return false;
        }
        
    }

    public function redireccionar($url){
        header("Location: ".$url);
    }
    
  public function autentificar(){
      if(isset($_POST["usuario"]) && isset($_POST["password"])){
      $usuario = $_POST["usuario"];
      //$password = md5($_POST["password"]);
      $password = $_POST["password"];
      $user= $this->modelo->consultarUsuario($_POST["usuario"],$_POST["password"]);
          if(isset($user)){
              $_SESSION["usuario"]=$user;
              
          }
      }
   }
   
   public function salir(){
       if(isset($_GET["salir"])){
           session_destroy();
           $this->redireccionar("login.php");
       }
   }
 
}
