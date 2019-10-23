<?php
include("conexion.php");
session_start();
$_SESSION['tpatente']='0';
$_SESSION['tmarca']='';
$_SESSION['tcolor']='';
$_SESSION['tkilometraje']='';
$_SESSION['tmodelo']='';

$_SESSION['des']='0';
$quehago=$_POST['accion'];
$quehagodos= $_GET['quehago'];

if($quehagodos=="cerrar"){

$_SESSION['logueado']="nologueado";
header('Location:index.php'); 
}

if($quehago=="intentar"){

$user = $_POST['usuario'];
$pass = $_POST['clave'];

$passenc=md5($pass);



$_SESSION['logueado']=0;
mysql_connect ("localhost","root","");


$SQLstr="select count(*) as total from usuarios  where user ="."'$user'"." and password="."'$passenc'";
$consulta=mysqli_query($coneccion,$SQLstr) or die("error de consulta");
$result = mysqli_fetch_array($consulta);
$num = $result['total'];
if($num>0){
  
  $_SESSION['logueado']="logueado";
  $_SESSION['log']=$user;
  header('Location:muestravehiculos.php');

}
else{$_SESSION['logueado']="nologueado";
?>
<script>
alert("Datos incorrectos,reintente");
</script>
<?php
}
}
include("menu.php");
?>
<center>
<br><br>
<table border="2">
    <tr>
     <td><img src="00017501.jpg"></td>
         <td width ="200px">
  
<center>
  <h2>ABM VEHICULAR</h2>
  
    <p>Iniciar sesion</p>
  <form action="index.php" method="POST">
          <input type="text" name ="usuario" required placeholder="usuario">
          <br><BR>
          <input type="password" name= "clave" required placeholder="clave">
          <input type="hidden" name="accion" value="intentar">
          <br><BR>  
          <input type="submit" name="enviar" value="ACEPTAR">

  </form> 

  
</center>

</td>
</tr>
</table>  
</center>