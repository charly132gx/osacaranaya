<?php
$usario="u744852672_dos";
$passwd="factorx";
$servidor="mysql.hostinger.mx";
$BD="u744852672_uno";

/*$usario="root";
$passwd="";
$servidor="localhost";
$BD="Proyecto_Final";*/

$conexion=mysqli_connect($servidor,$usario,$passwd,$BD)or die("Error al conectarse a la base de datos:".mysqli_error());
//mysql_select_db($BD,$conexion);
?>
