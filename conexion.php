<?php
$usuario= "root";
$contraseña = "";
$servidor = "localhost";
$basededatos = "prueba2";

$coneccion = mysqli_connect($servidor,$usuario,"") or die ("No se pudo conectar");
$db = mysqli_select_db($coneccion,$basededatos) or die ("La base de datos no existe");
?>