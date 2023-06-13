<?php
include('config.php'); // CONEXION
$id=$_GET['id'];
$sql="DELETE  FROM productos WHERE id=$id";
$result=mysqli_query($conn,$sql)or die(mysqli_error());
header("Location: vista.php");
?>