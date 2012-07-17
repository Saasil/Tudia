<?php 
include("conexion.php");
mysql_select_db("tudia",$conexion) or die ("Problemas en la seleccion de la
base de datos");
echo "Tu nombre es: ".$_REQUEST['nombrenuev']."<br>";
echo "Tu contrasena es: ".$_REQUEST['passnuev']."<br>";
$registros=mysql_query("select * from usuarios where nombre='$_REQUEST[nombrenuev]'",
$conexion) or die(mysql_error());
if($reg=mysql_fetch_array($registros)){
echo "Ya existe el nombre";
mysql_close($conexion);
}
else{
mysql_query("insert into usuarios(nombre,pass)  values
('$_REQUEST[nombrenuev]','$_REQUEST[passnuev]')",$conexion) or die
("Problemas en la conexion".mysql_error());
echo "Se han cargado los datos!";
mysql_close($conexion);
}
?>
