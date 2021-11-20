<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$ventas=$_POST['ventas'];
$inventario=$_POST['inventario'];
$horas=$_POST['horas'];


$sql="INSERT INTO empleado VALUES('$nombre','$apellidos','$ventas','$inventario' ,'$horas')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>