<?php
$usuario=$_POST["T1"];
$clave=$_POST["T2"];
if($usuario=="admin" && $clave=="senati"){
echo "<a href=menu.php>Ir al menu</a>";
}else{
echo "incorrecto";
}
?>