<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Citas</title>
    <link rel="stylesheet" href="./css/consulta.css ">
    <script>

    function mostrar() {

       document.getElementById("mod").style.display = "block";
    }

    </script>
</head>
<body>
    

<?php 

include('config.php');

include('session.php');

$consulta="SELECT c.dia_cita, c.hora_cita, c.personal_cita, c.motivo_cita FROM cita c WHERE c.usuario_cita='$login_session'";

$resultado=mysqli_query($db,$consulta);
?>
<h1>Mis Citas</h1>
<div class="todo">
<table>
    <tr>
    <th>Profesional</th>
    <th>Fecha de la cita</th>
    <th>Hora de la cita</th>
    <th>Motivo de la cita</th>
    </tr>
<?php 
while ($row = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['personal_cita']."</td>";
    echo "<td>".$row['dia_cita']."</td>";
    echo "<td>".$row['hora_cita']."</td>";
    echo "<td>".$row['motivo_cita']."</td>";
}
?>
</table>
<div class="modificar" id="mod">
<form action="modificar.php">
<div class="formulario">
    <fieldset>
        <legend>Cita Actual</legend>
        <label for="fecha_actual">Fecha: </label>
        <input type="date" name="fecha_actual" id="">
        <br>
        <br>
        <label for="hora_actual">Hora: </label></td>
        <select name="hora_actual">
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
    </select>
    <br><br>
        <label for="fisioterapeuta_actual">Fisioterapeuta: </label>
        <select name="fisioterapeuta_actual" id="">
            <option value="Dr.Ogas">Dr.Ogas</option>
            <option value="Ldo.Indo">Ldo.Indo</option>
            <option value="Espc.Victor">Espc.Victor</option>
        </select>
    </fieldset>
    <br>
    <fieldset>
        <legend>Cita Nueva</legend>
        <label for="fecha_nuevo">Fecha: </label>
        <input type="date" name="fecha_nuevo" id="">
        <br><br>
        <label for="hora_actual">Hora: </label></td>
        <select name="hora_actual">
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
    </select>
    <br><br>
        <label for="fisioterapeuta_nuevo">Fisioterapeuta: </label>
        <select name="fisioterapeuta_nuevo" id="">
            <option value="Dr.Ogas">Dr.Ogas</option>
            <option value="Ldo.Indo">Ldo.Indo</option>
            <option value="Espc.Victor">Espc.Victor</option>
        </select>
        <br><br>
        <label for="motivo_nuevo">Motivo: </label>
        <textarea name="motivo_nuevo" id="" cols="30" rows="10"></textarea>
    </fieldset>
</div>
    <br>
    <div class="boton">
        <button type="submit">Enviar</button>
    </div>
    </form>
</div>
</div>
<div class="boton">
<a href="#" onclick="mostrar()">Modificar citas</a>
<a href="index.php">Volver</a>
</div>
</body>
</html>