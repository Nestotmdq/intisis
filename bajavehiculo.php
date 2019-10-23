<?php
$usuario= "root";
$contraseña = "";
$servidor = "localhost";
$basededatos = "prueba2";





$coneccion = mysqli_connect($servidor,$usuario,"") or die ("No se pudo conectar");
$db = mysqli_select_db($coneccion,$basededatos) or die ("no se pudo conectar");
$consulta ="delete from autos where id_vehiculo = $_GET[codigo]";
mysqli_query($coneccion,$consulta) or die ("Error de consulta");

header('Location:muestravehiculos.php');
?>