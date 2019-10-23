<?php
if($_SESSION['logueado']=="logueado"){
echo '
 <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<div class="example">
    <ul id="nav">
                <li><a href="">Acciones</a>
            <ul>
                <li><a href="agregar3.php">Dar de alta</a></li>
                <li><a href="muestravehiculos.php">Consultar</a></li>
            </ul>
        </li>
        <li><a href="">Galeria de imagenes</a>
             <ul>

               <li><a href="imagenes.php">Subir imagenes</a></li>

               <li><a href="galeria.php">Ver galeria</a></li>
             </ul>  
        </li>
        <li><a href="index.php?quehago=cerrar">Cerrar sesion</a></li>';
        echo '<li><a>/  User  :</a></li>';
        echo '<li><a href="">'.$_SESSION["log"].'</a></li>';
        echo  '</ul>';
        echo'</div>';
}
else{
?>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<div class="example">
    <ul id="nav">
        <li><a href=""><br></a></li>
    </ul>
</div>
<?php
}
?>
