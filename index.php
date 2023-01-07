<?php
    include('config.php');
	session_start();
	
	$user_check = $_SESSION['login_user'];
	
	$ses_sql = mysqli_query($db,"select USERNAME_CLIENTE from cliente where USERNAME_CLIENTE = '$user_check' ");
	
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	
	$login_session = $row['USERNAME_CLIENTE'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clinica de Fisioterapia</title>
	<link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
	<div class="titulo">
<img src="./img/logo.png" alt="">
</div>
<?php 
if (isset($login_session)) {
	  
print ( "<h1>¡Bienvenido, ". $login_session . "!</h1>");
}
?>
<div class="menu">
	<?php 
if (isset($login_session)) {
	print ( '<a href="consulta.php">Consultar Citas</a>');
	print ( '<a href="crear.html">Pedir Cita</a>');
	print ( '<a href="modificar.html">Modificar Cita</a>');
	print ( '<a href="personal.php">Datos Personales</a>');
	print ( '<a href="logout.php">Cerrar Sesión</a>');
}	else {
	print ( '<a href="login.php">Iniciar Sesión</a>');
	print ( '<a href="signup.html">Registrarse</a>');
}
?>
		
</div>
<div class="portada">
	<img src="./img/portada.webp" alt="">
	<img src="./img/portada2.jpeg" alt="">
	<img src="./img/portada3.jpeg" alt="">
</div>

</body>
</html>