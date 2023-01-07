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

$fecha_actual = $_REQUEST['fecha_actual'];
$fisioterapeuta_actual = $_REQUEST['fisioterapeuta_actual'];

$fecha_nuevo = $_REQUEST['fecha_nuevo'];
$hora_nuevo = $_REQUEST['hora_nuevo'];
$fisioterapeuta_nuevo = $_REQUEST['fisioterapeuta_nuevo'];
$motivo_nuevo = $_REQUEST['motivo_nuevo'];

$consulta="UPDATE cita SET dia_cita='$fecha_nuevo', hora_cita='$hora_nuevo', personal_cita='$fisioterapeuta_nuevo',motivo_cita='$motivo_nuevo' WHERE dia_cita ='$fecha_actual' AND personal_cita ='$fisioterapeuta_actual' AND usuario_cita ='$login_session'";
$resultado=$db->query($consulta);

?>

<h1>Cita Modificada correctamente</h1>
<a href="index.php">Volver</a>
    
</body>
</html>
