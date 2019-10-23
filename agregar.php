<?php
include("menu.php");
include("conexion.php");


$rev=$_POST['accion'];
$pat=$_POST['XPATENTE'];
if($rev=="grabar"){

mysql_connect ("localhost","root","");
mysql_select_db ("prueba2");

$SQLstr="select count(*) as total from autos where patente ="."'$pat'";
$consulta=mysqli_query($coneccion,$SQLstr);

$result = mysqli_fetch_array($consulta);
$num = $result['total'];

if($num>0){
           echo "<script>";
           echo "alert('patente ya registrada , no es posible registrarla nuevamente')";
           echo "</script>";
          }
          else
          {
         
          $sql="INSERT INTO autos(marca,patente,color,kilometraje,modelo)VALUES
          ('".$_POST['XMARCA']."',
           '".$_POST['XPATENTE']."',
           '".$_POST['XCOLOR']."',
           '".$_POST['XKILOMETRAJE']."',
           '".$_POST['XMODELO']."')";
             
                  mysql_query($sql) or die(mysql_error());
                        echo "<script>";
                        echo "alert('registro exitoso')";
                        echo "</script>";
                  mysql_close();
    
}
}
?>
<br>
<center>
	<p>FORMULARIO DE ALTA DE VEHICULOS</p>
        <br>
<form name="form1" method="post" action="agregar.php">
   <table width="200" border="1">
    <tr>
      <td>PATENTE</td>
      <td>MARCA</td>
      <td>COLOR</td>
      <td>KILOMETRAJE</td>
      <td>MODELO</td>
    </tr>
    <tr>
      <td><label for="XPATENTE"></label>
      <input type="text" placeholder = "Ej: SYO252" name="XPATENTE" id="XPATENTE" required ></td>
      <td><label for="XMARCA"></label>
        <input type="text" placeholder="Ej: FORD" name="XMARCA" id="XMARCA" />        
        <label for="marca"></label></td>
      <td><label for="XCOLOR"></label>
      <input type="text" placeholder ="Ej: rojo"name="XCOLOR" id="XCOLOR" required></td>
      <td><label for="XKILOMETRAJE"></label>
      <input type="text" placeholder = "Ej: 1000000"name="XKILOMETRAJE" id="XKILOMETRAJE" required></td>
      <td><label for="XMODELO"></label>
      <input type="number" placeholder ="Ej: 2014"name="XMODELO" id="XMODELO" required></td>
      <input type="hidden" name="accion" value="grabar">
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="alta" id="alta" value="AGREGAR">
  </p>
  </form>
</form>

</center>

 
