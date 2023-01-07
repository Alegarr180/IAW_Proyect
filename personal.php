<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link rel="stylesheet" href="./css/personal.css ">
    <script>

    function mostrar() {

       document.getElementById("data").style.display = "block";
    }

    </script>
    <script>

function reveal() {

    
  var x = document.getElementById("pass");

  if (x.style.webkitTextSecurity === "disc") {
    x.style.webkitTextSecurity = "none";
  } else {
    x.style.webkitTextSecurity = "disc";
  }

}

    </script>
</head>
<body>
    

<?php 

include('config.php');

include('session.php');

$consulta="SELECT * FROM cliente WHERE USERNAME_CLIENTE='$login_session'";

$resultado=mysqli_query($db,$consulta);
?>
<table>
    <tr>
    <th>Nombre de usuario</th>
    <th>Contraseña</th>
    <th>Nombre</th>
    <th>Primer Apellido</th>
    <th>Segundo Apellido</th>
    <th>DNI</th>
    <th>Fecha de Nacimiento</th>
    <th>Domicilio</th>
    <th>Sexo</th>
    </tr><tr>
        
<?php 
while ($row = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['USERNAME_CLIENTE']."</td>";
    echo "<td id='pass' style='-webkit-text-security: disc;' onclick='reveal()'>".$row['PASS_CLIENTE']."<img src='./img/pass.svg' width='32px'></td>";
    echo "<td>".$row['NOMBRE']."</td>";
    echo "<td>".$row['APELLIDO1']."</td>";
    echo "<td>".$row['APELLIDO2']."</td>";
    echo "<td>".$row['DNI_CLIENTE']."</td>";
    echo "<td>".$row['FECHANAC_CLIENTE']."</td>";
    echo "<td>".$row['DIRECCION']."</td>";
    echo "<td>".$row['SEXO']."</td>";
}
?>
</tr>
</table>
<div id="data">
<table>
<tr>
    <th>Nombre de usuario</th>
    <th>Contraseña</th>
    <th>Nombre</th>
    <th>Primer Apellido</th>
    <th>Segundo Apellido</th>
    <th>DNI</th>
    <th>Fecha de Nacimiento</th>
    <th>Domicilio</th>
    <th>Sexo</th>
    </tr><tr>
<form action="datos.php">
       <td><input type="text" name="USERNAME_CLIENTE2"></td>
       <td><input type="password" name="PASS_CLIENTE2"></td>
       <td><input type="text" name="NOMBRE2"></td>
       <td><input type="text" name="APELLIDO12"></td>
       <td><input type="text" name="APELLIDO22"></td>
       <td><input type="text" name="DNI_CLIENTE2"></td>
       <td><input type="date" name="FECHANAC_CLIENTE2"></td>
       <td><input type="text" name="DIRECCION2"></td>
       <td><select name="SEXO2">
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
        <option value="Otro">Otro</option>
       </select></td>

</tr>
</table>
    <div class="boton">
        <button type="submit">Enviar</button>
    </div>
    </form>

</div>
<br>

<div class="boton">
<a href="#" onclick="mostrar()">Modificar Datos</a>
<a href="erase.html">Eliminar Usuario</a>
<a href="index.php">Volver</a>
</div>
</body>
</html>