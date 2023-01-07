<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
<?php

include('config.php');

include('session.php');

$usuario = $_REQUEST['USERNAME_CLIENTE2'];
$password = $_REQUEST['PASS_CLIENTE2'];
$nombre = $_REQUEST['NOMBRE2'];
$apellido_uno = $_REQUEST['APELLIDO12'];
$apellido_dos = $_REQUEST['APELLIDO22'];
$dni = $_REQUEST['DNI_CLIENTE2'];
$fecha = $_REQUEST['FECHANAC_CLIENTE2'];
$direccion = $_REQUEST['DIRECCION2'];
$sexo = $_REQUEST['SEXO2'];

$consulta="SELECT * FROM cliente WHERE USERNAME_CLIENTE='$login_session'";

$resultado=mysqli_query($db,$consulta);

if (empty($usuario)) {
    while ($row = $resultado->fetch_assoc()) {
        $usuario = $row['USERNAME_CLIENTE'];
    }
  }

  $resultado=mysqli_query($db,$consulta);

  if (empty($password)) {
    while ($row = $resultado->fetch_assoc()) {
        $password = $row['PASS_CLIENTE'];
    }
  }

  $resultado=mysqli_query($db,$consulta);

  if (empty($nombre)) {
    while ($row = $resultado->fetch_assoc()) {
        $nombre = $row['NOMBRE'];
    }
  }

  $resultado=mysqli_query($db,$consulta);

  if (empty($apellido_uno)) {
    while ($row = $resultado->fetch_assoc()) {
        $apellido_uno = $row['APELLIDO1'];
    }
  }

  $resultado=mysqli_query($db,$consulta);

  if (empty($apellido_dos)) {
    while ($row = $resultado->fetch_assoc()) {
        $apellido_dos = $row['APELLIDO2'];
    }
  }
  
  $resultado=mysqli_query($db,$consulta);

  if (empty($dni)) {
    while ($row = $resultado->fetch_assoc()) {
        $dni = $row['DNI_CLIENTE'];
    }
  }

  $resultado=mysqli_query($db,$consulta);

  if (empty($fecha)) {
    while ($row = $resultado->fetch_assoc()) {
        $fecha = $row['FECHANAC_CLIENTE'];
    }
  }

  $resultado=mysqli_query($db,$consulta);

  if (empty($direccion)) {
    while ($row = $resultado->fetch_assoc()) {
        $direccion = $row['DIRECCION'];
    }
  }

  $resultado=mysqli_query($db,$consulta);

  if (empty($sexo)) {
    while ($row = $resultado->fetch_assoc()) {
        $sexo = $row['SEXO'];
    }
  }


$consulta="UPDATE cliente SET USERNAME_CLIENTE='$usuario', PASS_CLIENTE='$password', NOMBRE='$nombre', APELLIDO1='$apellido_uno', APELLIDO2='$apellido_dos', DNI_CLIENTE='$dni', FECHANAC_CLIENTE='$fecha', DIRECCION='$direccion', SEXO='$sexo' WHERE USERNAME_CLIENTE ='$login_session'";
$resultado=mysqli_query($db,$consulta);

?>

<h1>Datos Personales modificados correctamente</h1>
<a href="index.php">Volver</a>
</body>
</html>