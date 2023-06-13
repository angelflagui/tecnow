<?php 
include("config.php"); // CONEXION
$id=$_POST['id'];
$producto=$_POST['producto'];
$descripcion=$_POST['descripcion'];
$descripcion_eng=$_POST['descripcion_eng'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$marca=$_POST['marca'];
$stock=$_POST['stock'];

$sql="UPDATE productos SET producto='$producto', descripcion='$descripcion', descripcion_eng='$descripcion_eng',
precio='$precio', categoria_id='$categoria', marca_id='$marca', stock='$stock' WHERE id=$id ";
$result=mysqli_query($conn,$sql)or die(mysqli_error());
header("Location: vista.php");
?>