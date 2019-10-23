<?php
session_start();
if($_SESSION['logueado']=="nologueado")
	{
     header('Location:index.php');
    }
include("conexion.php");
$consulta ="select * from imagen order by id";
$resultado = mysqli_query($coneccion,$consulta) or die ("Error de consulta");
$quehago=$_GET['accion'];
if($quehago==borrar){
$consulta ="delete from imagen where id = $_GET[codigo]";

mysqli_query($coneccion,$consulta) or die ("Error de consulta");
header('Location:galeria.php');
}
include("menu.php"); 
?>
<br><CENTER>
	<p>GALERIA DE IMAGENES</p>
	<BR>
	<TABLE BORDER=1>
			<TR>
				<TD>NOMBRE</TD>
				<TD><center>IMAGEN</center></TD>
				<TD>BORRAR</TD>
			</TR>

<?php
echo"<script>";
echo"function confirmar_accion(){";
echo"return confirm ('Confirma eliminacion?')";
echo"}";
echo"</script>";
while ($columna = mysqli_fetch_array($resultado)){
?>
<tr>
<td><?php echo $columna['nombre']; ?></td>
<td><center><img height="200px"src="data:image/jpg;base64,<?php echo base64_encode($columna['imagen']);?>"/></center></td>
<TD>

<?php	
echo"	<a onclick='return confirmar_accion();
'href='galeria.php?codigo=".$columna['id']."&accion=borrar'><center><img src='descarga.jpg'width='20'></center></a>"
?>


</TD>
</tr>
<?php
		}
?>
		</TABLE>

	</CENTER>