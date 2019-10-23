

<?php

$rev=$_POST['XPATENTE'];
echo $rev;


$consulta="select * from autos where patente ='".$rev."'";

mysql_connect ("localhost","root","");
mysql_select_db ("prueba2");

$sql="INSERT INTO autos(marca,patente,color,kilometraje,modelo)VALUES
('".$_POST['XMARCA']."',
 '".$_POST['XPATENTE']."',
 '".$_POST['XCOLOR']."',
 '".$_POST['XKILOMETRAJE']."',
 '".$_POST['XMODELO']."')";

 
mysql_query($sql) or die(mysql_error());
mysql_close();


include("menu.php");
?>
<script>
alert("Se inserto correctamente");  
</script>  
<center><br><br>
<table width="512" height="129" border="1">
  <tr>
    <td><center><p>Desea dar de alta otro vehiculo?</p>
      <table width="200" border="0">
        <tr>
          <td><form id="form1" name="form1" method="post" action="prueba2.php">
            <center>
              <input type="submit" name="button" id="button" value="  SI  " />
            </center>
          </form></td>
          <td><form id="form2" name="form2" method="post" action="muestravehiculos.php">
            <center>
              <input type="submit" name="button2" id="button2" value="  NO  " />
            </center>
          </form></td>
        </tr>
    </table></td>
  </tr></center>
</table>
</center>
<br><br>
<center>

<center>
</center>








