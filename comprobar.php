<?php
include("conexion.php");

 

$pat='ada000';
echo $pat;


$SQLstr="select count(*) as total from autos where patente ="."'$pat'";
$consulta=mysqli_query($coneccion,$SQLstr);



$result = mysqli_fetch_array($consulta);
$num = $result['total'];


if($num>0){


	echo "<script>";
    echo "alert('ya existe, no es posible guardarlo')";
    echo "</script>";
    }


else{


echo "<script>";
    echo "alert('no existe,lo guardo')";
    echo "</script>";


}
?>
