<?php
include("config.php"); // CONEXIÓN A LA BD
$producto=$_POST['producto'];
$descripcion=$_POST['descripcion'];
$descripcion_eng=$_POST['descripcion_eng'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$marca=$_POST['marca'];
$stock=$_POST['stock'];

$SQL="INSERT INTO productos(producto, descripcion, descripcion_eng, precio, categoria_id, marca_id, stock)
      VALUES ('$producto', '$descripcion', '$descripcion_eng', '$precio', '$categoria', '$marca', '$stock')";


if ($conn->query($SQL) === TRUE) {
    echo "Nuevo registro realizado";
    header("Location: vista.php");
} 
else 
{
    echo "error:" .$SQL."<br>".$conn->error;
}
    
$conn->close();
?>