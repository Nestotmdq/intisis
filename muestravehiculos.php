<?php
include("conexion.php");
session_start();

if($_SESSION['logueado']=="nologueado")
	{
     header('Location:index.php');
    }
	  
$_SESSION['tpatente']='0';
$_SESSION['tmarca']='';
$_SESSION['tcolor']='';
$_SESSION['tkilometraje']='';
$_SESSION['tmodelo']='';

$_SESSION['des']='0';

$consulta ="select * from autos order by id_vehiculo ";
$resultado = mysqli_query($coneccion,$consulta) or die ("Error de consulta");

$quehago = $_GET['accion'];

if($quehago==borrar){

$consulta ="delete from autos where id_vehiculo = $_GET[codigo]";
mysqli_query($coneccion,$consulta) or die ("Error de consulta");

header('Location:muestravehiculos.php');
}

include("menu.php");
?>

<br>
    <center>
	<p>LISTADO DE VEHICULOS</p>
    <br>
    <table  border="2">
   		 <tr>
    	 	<td width="20">BORRAR</td>
         	<td width="155">PATENTE</td>
         	<td width="155">COLOR</td>
         	<td width="155">MARCA</td>
         	<td width="155">KILOMETRAJE</td>
         	<td width="155">MODELO</td>
         	<td width="20">EDITAR</td>
         </tr>
         
<?php         

echo"<script>";
echo"function confirmar_accion(){";
echo"return confirm ('Confirma eliminacion?')";
echo"}";
echo"</script>";
while ($columna = mysqli_fetch_array($resultado))
		{
		echo "<tr>";
		    echo "<td width='20'>";
echo"	<a onclick='return confirmar_accion();

'href='muestravehiculos.php?codigo=".$columna['id_vehiculo']."&accion=borrar'><center><img src='descarga.jpg'            width='20'></center></a>";

			
		
			echo "</td>";
			echo "<td width='155'>".$columna['patente'];echo"</td>";
			echo "<td width='155'>".$columna['color'];echo"</td>";
			echo "<td width='155'>".$columna['marca'];echo"</td>";
			echo "<td width='155'>".$columna['kilometraje'];echo"</td>";
			echo "<td width='155'>".$columna['modelo'];echo"</td>";
		    echo "<td width='20'>";
			echo '<a href="modificar.php?codigo='.$columna['id_vehiculo'].'&accion=modificar"><center><img src="engranaje.jpg" width="20"></center></a>';
			echo "</td>";
		echo "</tr>";	
		}
?>           
            
</table>
    </center>