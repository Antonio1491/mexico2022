
<?php
session_start();
<<<<<<< HEAD

=======
>>>>>>> 2fb322abddbfd6fcead82d23a06d2178890e153a
require('../class/funciones.php');

// $email = $mysqli->real_escape_string($_POST['email']);
// $password = $mysqli->real_escape_string($_POST['password']);
$email = $_POST['email'];
$password = $_POST['password'];

if($email === '' || $password=== ''){
  echo json_encode('vacio');
}else{
  $comprobar = new Login();
$resultado = $comprobar->verificarCampos($email, $password);
}

// $comprobar = new Login();
// $resultado = $comprobar->verificarCampos($email, $password);

// echo $resultado;

 ?>
