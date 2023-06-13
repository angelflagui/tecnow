<?php
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = $_FILES['imagen'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$stock = $_POST['stock'];

include('crud.php');

$conexion=conexion();
$query=insertar($conexion,$producto,$descripcion,$precio,$imagen,$categoria,$marca,$stock);

?>