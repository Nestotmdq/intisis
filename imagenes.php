<?php
session_start();
if($_SESSION['logueado']=="nologueado")
      {
     header('Location:index.php');
    }
include("menu.php"); 
include("conexion.php");
$rev=$_POST['accion'];



if($rev=="subir"){

mysql_connect ("localhost","root","");
mysql_select_db ("prueba2");


$nombre= $_POST['nombre'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$sql= "INSERT INTO 	imagen(nombre,imagen) VALUES ('$nombre','$imagen')";
$resultado= mysql_query($sql);

if($resultado){echo "<script>";
                        echo "alert('registro exitoso')";
                        echo "</script>";}else{
                        	   					echo"<script>";
                        						echo "alert('registro incorrecto')";
                        					    echo"</script>";

                        						}	
                        }

{
?>
<br>
<center>
<p>FORMULARIO PARA SUBIR IMAGENES A LA BASE DE DATOS</p>
</center>	
<br><br>

<center>
<table border=1 width=500>

<tr><td>
<center>
<br>
	<img src="des.jpg">
	<form action ="imagenes.php" method ="POST" enctype="multipart/form-data" >
			<br>
			<input type="text" name="nombre" placeholder="nombre" required>
			<input type="file" name="imagen" required><br><br>
			<input type="submit" value ="Aceptar">
            <input type="hidden" name="accion" value = "subir">
	</form>	
</center>
</td></tr>
</table>
</center>

<?php
}
?>