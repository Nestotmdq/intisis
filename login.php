<?php
session_start();
$_SESSION['logueado']=0;

?>
<center>
	<BR>
	<form action="destino.php" method="POST">
          <input type="text" name ="usuario" required placeholder="usuario">
          <br><BR>
          <input type="password" name= "clave" required placeholder="clave">
          <br><BR>	
          <input type="submit" name="enviar" value="INICIAR">

	</form>	

	<?php echo $_SESSION['logueado'] ?>
</center>