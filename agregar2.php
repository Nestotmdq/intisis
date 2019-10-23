<?php
session_start();
include("menu.php");
include("conexion.php");
$rev=$_POST['accion'];
if($rev==grabar){
$_SESSION['tpatente']=$_POST['XPATENTE'];
$_SESSION['tmarca']=$_POST['XMARCA'];
$_SESSION['tcolor']=$_POST['XCOLOR'];
$_SESSION['tkilometraje']=$_POST['XKILOMETRAJE'];
$_SESSION['tmodelo']=$_POST['XMODELO'];
$_SESSION['des']='1';
$marca=$_SESSION['tmarca'];
$color=$_SESSION['tcolor'];
$kilometraje=$_SESSION['tkilometraje'];
$modelo=$_SESSION['tmodelo'];
$pat=$_SESSION['tpatente'];

mysql_connect ("localhost","root","");
mysql_select_db ("prueba2");
$SQLstr="select count(*) as total from autos where patente ="."'$pat'";
$consulta=mysqli_query($coneccion,$SQLstr);
$result = mysqli_fetch_array($consulta);
$num = $result['total'];

if($num>0){
           echo "<br><br><br><br>";
           echo "<center><strong>";
           echo "No es posible dar del alta el vehiculo porque la patente "."$pat"." ya esta en uso,ingrese otra por favor";
           echo "</center></strong>";
           ?>
           
<br><br>
<center>
  <table width="283" border="2">
  <br>
    <tr>
    <td height="126"><form name="form1" method="post" action="agregar2.php">
      <p>
        <label for="textfield"></label>
      <center>  <input type="text" placeholder= "PATENTE"name="XPATENTE" id="textfield" required></center>
        </p>
      <p>
       <center> <input type="submit" name="button" id="button" value="Enviar"></center>
      </p>
      <input type="hidden" name="accion" value="grabar">
     
      <?php
      echo "<input type='hidden' name = 'XMARCA' value="."$marca".">";
      echo "<input type='hidden' name = 'XCOLOR' value="."$color".">";
      echo "<input type='hidden' name = 'XKILOMETRAJE' value="."$kilometraje".">";
      echo "<input type='hidden' name = 'XMODELO' value="."$modelo".">";
      ?> 
    </form></td>
  </tr>
</table>


<br><br>

<form name = "form2" method="post" action="index.php">
  <input type="submit" name="button" id="button" value="cancelar">
 </form>
 </center>


           <?php
          }
          else
          {
         $sql="INSERT INTO autos(marca,patente,color,kilometraje,modelo)VALUES
          ('".$_SESSION['tmarca']."',
           '".$_SESSION['tpatente']."',
           '".$_SESSION['tcolor']."',
           '".$_SESSION['tkilometraje']."',
           '".$_SESSION['tmodelo']."')";
          mysql_query($sql) or die(mysql_error());
                        echo "<script>";
                        echo "alert('registro exitoso')";
                        echo "</script>";
            $_SESSION['des']='0';
      }
}
if($_SESSION['des']=='0'){
?>  
<br>
<center>
  <p>FORMULARIO DE ALTA DE VEHICULOS</p>
        <br>
<form name="form1" method="post" action="agregar2.php">
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

<?php
}
?>
 
