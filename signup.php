<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
<?php

include('config.php');

$usuario = $_REQUEST['usuario'];
$password = $_REQUEST['password'];
$nombre = $_REQUEST['nombre'];
$apellido_uno = $_REQUEST['apellido_uno'];
$apellido_dos = $_REQUEST['apellido_dos'];
$dni = $_REQUEST['dni'];
$fecha = $_REQUEST['fecha'];
$direccion = $_REQUEST['direccion'];
$sexo = $_REQUEST['sexo'];

$consulta="INSERT INTO cliente (USERNAME_CLIENTE, PASS_CLIENTE, NOMBRE, APELLIDO1, APELLIDO2, DNI_CLIENTE, FECHANAC_CLIENTE, DIRECCION, SEXO) values ('$usuario','$password','$nombre','$apellido_uno','$apellido_dos','$dni','$fecha','$direccion','$sexo')";
$resultado=mysqli_query($db,$consulta);

?>

<h1>Usuario registrado correctamente</h1>
<a href="index.php">Volver</a>
</body>
</html>