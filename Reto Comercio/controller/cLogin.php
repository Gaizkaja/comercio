

<?php
require_once '../model/usuarioModel.php';

$data=json_decode(file_get_contents("php://input"),true);
//Cojemos las 2 variables recibidas en data, que necesitaremos para iniciar sesión

$nombreUsuario = $data['nombreUsuario'];
$password = $data['password'];

$response = array();
$user = new usuarioModel();

$user->setNombreUsuario($nombreUsuario);
$user->setPassword($password);

$error = $user->findUserByUsername();
if ($error !="no error" ) {
    
  $response["message"] = $error;
  
} else {

  $response["message"] = $error;

 if (!isset($_SESSION))
 {
   session_start();
 }

 $_SESSION['nombreUsuario']=$nombreUsuario;
  
 $response["nombreUsuario"] = $_SESSION['nombreUsuario'];
 $response["message"] = "no error";   
}

echo json_encode($response);