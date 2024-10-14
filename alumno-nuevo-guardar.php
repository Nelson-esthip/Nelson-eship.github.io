<?php
session_start();
$idusuario=$_SESSION["usuario"];

$nombre = $_POST["nombre"];
$escuela = $_POST["escuela"];
$carrera = $_POST["carrera"];
$fechanacimiento = new DateTime($_POST["Fechanacimiento"]);
$hoy = new DateTime();
$edad = $hoy->diff($fechanacimiento);

$conexion = mysqli_connect("localhost", "root", "", "bdacademico") or
	die("Problemas con la conexión");

$sql="insert into aumnos(nombre,fechanacimiento,escuela,carrera,idusuario)
	values('$nombre', '$fechanacimiento','$escuela','$carrera','$idusuario')";

mysqli_query($conexion, $sql) or
	die("Problemas en el insert: " .mysqli_error($conexion));

mysqli_close($conexion);

echo "Se ingreso el alumno correctamente";
echo "<a href=menu.php>Regresar a Menu</a>"
?>

<html lang="en">
<body>
	<div class="contenedor">
	<p>Hola<?= $nombre?></p>
	<p>Bienvenido a Senati</p>
	<p>Escuela<?= $escuela?></p>
	<p>Carrera<?= $carrera?></p>
	<p>Tu edad es<?= $edad->y?>años</p>
	</div>
	<a href=",,/html/new,html" class="boton-salir">Regresar al menu</a>
</body>
</html>







