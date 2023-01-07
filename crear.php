<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cita</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>

<?php

include('config.php');

include('session.php');

$fecha = $_REQUEST['fecha'];
$hora = $_REQUEST['hora'];
$fisioterapeuta = $_REQUEST['fisioterapeuta'];
$motivo = $_REQUEST['motivo'];

$consulta="INSERT INTO cita (dia_cita, hora_cita, personal_cita, motivo_cita, usuario_cita) values ('$fecha', '$hora','$fisioterapeuta','$motivo','$login_session')";
$resultado=$db->query($consulta);

?>

<h1>Cita Creada correctamente</h1>
<a href="index.php">Volver</a>
    
</body>
</html>
