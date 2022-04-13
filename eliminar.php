<?php

include("conexion.php");
$con=conectar();

$cod_conductor=$_GET['id'];

$sql="DELETE FROM conductor  WHERE dni_conductor='$cod_conductor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: conductor.php");
    }
?>