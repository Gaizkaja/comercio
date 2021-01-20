<?php
session_start();

$response = array();
$response["message"] = "no logged";

if (isset($_SESSION['idUsuario']) && isset($_SESSION['nombreUsuario']) && isset($_SESSION['admin'])) {
     
     $response["message"] = "logged";
     $response["idUsuario"] = $_SESSION['idUsuario'];
     $response["nombreUsuario"] = $_SESSION['nombreUsuario'];
     $response["admin"] = $_SESSION['admin'];
}

echo json_encode($response);
