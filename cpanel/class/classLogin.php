
<?php
// =================  Sistema de login   =========================
class Login extends Conexion{

  public function __construct(){

    parent::__construct();

  }

  public function verificarCampos($us, $pas){

    if ((isset ($us) && $us != '') && (isset ($pas) && $pas != ''))  {

        // echo "tenemos datos" . $us . " - ". $pas;

          //funciona
<<<<<<< HEAD
        $sql = $this->conexion_db->query("SELECT * FROM credenciales
                                    WHERE usuario = '$us'
                                    AND password = '$pas' ");

        // $sql = $this->conexion_db->query("SELECT * FROM credenciales
        //                             WHERE usuario = '$us'" AND password = '');
=======
        // $sql = $this->conexion_db->query("SELECT * FROM credenciales
        //                             WHERE usuario = '$us'
        //                             AND password = '$pas' ");

        $sql = $this->conexion_db->query("SELECT * FROM credenciales
                                    WHERE usuario = '$us'
                                    AND password = '$pas'");
>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a

        // password_verify($pas, )

        $respuesta = $sql->fetch_all(MYSQLI_ASSOC);

        if ($respuesta) 
        {
          foreach ($respuesta as $valor)
          {
            $id_usuario = $valor['id_credencial'];
            $nivel = $valor['tipo'];
            //el nivel es el tipo de usuario: admin, conferencista, comité , etc.

            if (session_status() == PHP_SESSION_NONE) 
            {
              session_start();
            }

            $usuario = $valor['usuario'];
            $_SESSION['idCredencial'] = $valor['id_credencial'];
            $_SESSION['nombre'] = $valor['nombre'];
            $_SESSION['apellido'] = $valor['apellido'];
<<<<<<< HEAD
            // $_SESSION['fotografia'] = $valor['fotografia'];
=======
            $_SESSION['fotografia'] = $valor['fotografia'];
>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a
            $_SESSION['tipoUsuario'] = $valor['tipo'];
            $_SESSION['usuario'] = $usuario; // $username coming from the form, such as $_POST['username']
          }
              if ($nivel == 1) 
              {
                echo  json_encode('admin');                                
              }
              else if($nivel == 3)
              {
                echo json_encode ($respuesta);                      
              }
              else 
              {               
                echo json_encode ($respuesta);                      
                }
        }
        else {

        echo  json_encode('error');                                
      }

      }
      // else {
      
      // }
  }


  public function verificaLogin(){
    if (empty($_SESSION['usuario'])) {

      echo '<script>
      Swal.fire({ title: "Ups",
          text: "Introduce correctamente tus credenciales para ver esta seccion",
          icon: "error",customClass: "swal-wide",}).then(okay => {
            if (okay) {
             window.location.href = "../index.html";
           }
         });
    
    </script>';
<<<<<<< HEAD
    exit;
    
    }

    return true;
=======
    
    }
    // return true;
>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a
  }

}
// ==============  Fin sistema de login ================

 ?>
