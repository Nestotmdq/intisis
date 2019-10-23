<?php
include("menu.php");
?>

<br>
<center>

	<p>FORMULARIO DE ALTA DE VEHICULOS</p>
    
   
    <br>
<form name="form1" method="post" action="procesar.php">


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
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="alta" id="alta" value="AGREGAR">
  </p>
  </form>
</form>

</center>

 
