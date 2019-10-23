<?PHP
include("conexion.php");
$id=$_POST['id'];
$pat=$_POST['XPANTENTE'];
$col=$_POST['XCOLOR'];
$mar=$_POST['XMARCA'];
$kil=$_POST['XKILOMETRAJE'];
$mod=$_POST['XMODELO'];

$consulta ="Update autos Set patente='$pat',marca='$mar',color='$col',kilometraje='$kil',modelo='$mod' where id_vehiculo='$id'";
mysqli_query($coneccion,$consulta) or die ("Error de consulta");

header('Location:muestravehiculos.php');
?>