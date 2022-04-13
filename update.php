<?php

include("conexion.php");
$con=conectar();

$dni_conductor=$_POST['dni_conductor'];
$nombres=$_POST['Nombre'];
$apellidos=$_POST['Apellidos'];
$edad=$_POST['Edad'];
$modelo=$_POST['Modelo_auto'];

$sql="UPDATE conductor SET  Nombre='$nombres',Apellidos='$apellidos',Edad='$edad',Modelo_auto='$modelo' WHERE dni_conductor='$dni_conductor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: conductor.php");
    }
?>