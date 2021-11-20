<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$ventas=$_POST['ventas'];
$inventario=$_POST['inventario'];
$horas=$_POST['horas'];

$sql="UPDATE empleado SET  nombre='$nombre',apellidos='$apellidos',ventas='$ventas',inventario='$inventario',horas='$horas' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>