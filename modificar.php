<?php
session_start();
include("conexion.php");

if($_SESSION['logueado']=="nologueado")
	{
     header('Location:index.php');
    }
$quehago = $_POST['accion'];
if($quehago==modificar){

$id=$_POST['id'];
$pat=$_POST['XPANTENTE'];
$col=$_POST['XCOLOR'];
$mar=$_POST['XMARCA'];
$kil=$_POST['XKILOMETRAJE'];
$mod=$_POST['XMODELO'];

$consulta ="Update autos Set patente='$pat',marca='$mar',color='$col',kilometraje='$kil',modelo='$mod' where id_vehiculo='$id'";
mysqli_query($coneccion,$consulta) or die ("Error de consulta");
header('Location:muestravehiculos.php');
}
include("menu.php");
$consulta ="select * from autos where id_vehiculo= $_GET[codigo] ";
$resultado = mysqli_query($coneccion,$consulta) or die ("Error de consulta");
echo"<center><p>MODIFICAR DATOS</p></center>";   
echo"<center>";
echo"   <form id='form1' name='form1' method='post' action='actualiza.php'>";
echo"   <br>";
echo"  <table  border='2'>";
echo"    <tr>";
echo"      <td width='155'>PATENTE  (solo lectura)</td>";
echo"      <td width='155'>COLOR</td>";
echo"      <td width='155'>MARCA</td>";
echo"      <td width='155'>KILOMETRAJE</td>";
echo"      <td width='155'>MODELO</td>";
echo"    </tr>";
echo"    <tr>";

while ($columna = mysqli_fetch_array($resultado)){ 
echo"    <td><label for='XPANTENTE'></label>";
echo"       <input type='text' readonly name='XPANTENTE' id='XPANTENTE' value='".$columna['patente'];
echo "'/>";
echo "</td>";
echo"      <td><label for='XCOLOR'></label>";

echo"        <input type='text' name='XCOLOR' id='XCOLOR' value='".$columna['color'];
echo"'/>";
echo "</td>";
echo"      <td><label for='XMARCA'></label>";
echo"        <input type='text' name='XMARCA' id='XMARCA' value='".$columna['marca'];
echo"' />";
echo"</td>";
echo"      <td><label for='XKILOMETRAJE'></label>";
echo"        <input type='text' name='XKILOMETRAJE' id='XKILOMETRAJE' value='".$columna['kilometraje'];;
echo"' />";
echo"</td>";
echo"      <td><label for='XMODELO'></label>";
echo"        <input type='text' name='XMODELO' id='XMODELO' value='".$columna['modelo'];
echo"' />";
echo"</td>";
echo" </tr>";
echo"        <input type='hidden' name='id' value='".$columna['id_vehiculo'];
echo"'/>";
echo" <input type='hidden' name='accion' value=modificar>";
}
echo" </table>";
echo"<br><br>";
echo" <input type='submit' name='button' id='button' value='MODIFICAR' />"  ;
  ?>
    <p>&nbsp;</p>
</form> 
</center>        
