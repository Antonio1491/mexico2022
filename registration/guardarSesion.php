<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
require ('./../class/clases.php');

$registro = new Propuesta();
// datos personales del conferencista
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$email = $_POST['Email'];
$emailAsis = $_POST['EmailAsistente'];
$telefono = $_POST['Telefono'];
$cargo = $_POST['Cargo'];
$empresa = $_POST['Empresa'];
$pais = $_POST['Pais'];
$ciudad = $_POST['Ciudad'];
$experiencia = $_POST['Experiencia'];
$nombre_foto = $_FILES['fotografia']['name'];
$tipo_foto = $_FILES['fotografia']['type'];
$temporal_foto = $_FILES['fotografia']['tmp_name'];

$array = count($_POST['Nombre']);

// Datos sobre la sesión educativa
$sesion = filtrado($_POST['Sesion']);
$tipoSesion = $_POST['tipoSesion'];
$modalidadSesion = $_POST['modalidadSesion'];
$subtema = $_POST['subtema'];
$descripcion = filtrado($_POST['Descripcion']);
$justificacion = filtrado($_POST['Justificacion']);

$modalidad = $_POST['Modalidad'];
$enlace1 = $_POST['Enlace1'];
$enlace2 = $_POST['Enlace2'];
$enlace3 = $_POST['Enlace3'];
$evento = $_POST['Evento'];
// $nombre_documento= $_FILES['archivo']['name'];
// $tipo_documento = $_FILES['archivo']['type'];
// $temporal_documento = $_FILES['archivo']['tmp_name'];

// var_dump($_POST);
// die();

$sesion = $registro->registroPropuesta($sesion, $tipoSesion, $modalidadSesion, $subtema,
                                      $descripcion, $justificacion, $modalidad, 
                                      $enlace1, $enlace2, $enlace3, $evento);

$aspirante = $registro->registroAspirante($array, $nombre, $apellido, $email,
                                              $emailAsis, $telefono, $cargo, $empresa,
                                            $pais, $ciudad, $experiencia, $nombre_foto,
                                            $tipo_foto, $temporal_foto, $evento);

                                           



function filtrado($datos){
  $datos = trim($datos); // Elimina espacios antes y después de los datos
  $datos = addslashes($datos); // Inserta un \ para los apostrofes del texto (textos en inglés)
  return $datos;
}


if ( $aspirante == true && $sesion == true ) {
  // $envioCorreo = $registro->correoRegistroPropuesta($email);
  // $envioCorreo = $registro->avisoNuevaSesion($nombre, $apellido);
  echo header("Location: propuestaRegistrada.html");

}
else{
  echo" 
  <script language='JavaScript'>
      alert('Error: No pudimos realizar el registro');
      </script>";
  echo "<script>window.history.go(-1);</script>";
}

 ?>


