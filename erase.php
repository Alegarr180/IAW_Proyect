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

$consulta="DELETE FROM cliente WHERE USERNAME_CLIENTE ='$login_session'";
$resultado=mysqli_query($db,$consulta);


?>

<h1>El Usuario ha sido eliminado correctamente</h1>
<a href="index.php">Volver</a>
</body>
</html>