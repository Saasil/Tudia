<html>
<body>
<head><title> Tu dia ! </title>
</head>
<?php
include("conexion.php");
mysql_select_db("tudia",$conexion) or die ("Problemas en la seleccion
   de db");
$registros=mysql_query("select * from usuarios 
 where nombre='$_REQUEST[nombre]' and 
pass='$_REQUEST[pass]'",$conexion) or die("Problemas"); 
if($reg=mysql_fetch_array($registros)){
 $tudia=rand(0,10); 
$buendia= 7; 
$diacomun= 4; 
$maldia= 1; 
echo "Bienvenido ".$reg['nombre']."<br>"; 
echo "Tu puntuacion del dia sera: ".$tudia."<br>"; 
echo "Tu dia sera: ";
 if($tudia>=$diacomun&&$tudia<$buendia){ 
echo "Comun, ni bueno ni malo";}
elseif($tudia<10&&$tudia>=$buendia){
echo "Bueno";}
elseif($tudia==10){
echo "Perfecto";}
elseif($tudia<$diacomun&&$tudia>=$maldia){
echo "Malo";}
elseif($tudia==0){
echo "Suicidate";}
}
else{
echo "Usuario o contraseña incorrectos ";
echo "<a href='index.php'>"."Volver"."</a>";
}
?>
</body>
</html>
