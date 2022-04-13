<?php
include("conexion.php");
$con=conectar();

$dni=$_POST['dni_conductor'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Edad=$_POST['Edad'];
$Modelo=$_POST['Modelo_auto'];


$sql="INSERT INTO conductor VALUES('$dni','$Nombre','$Apellidos','$Edad', '$Modelo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: conductor.php");
    
}else {
}
?>