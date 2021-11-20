<?php

include("conexion.php");
$con=conectar();

$nombre=$_GET['id'];


$sql="DELETE FROM empleado where nombre='$nombre' ";


$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>