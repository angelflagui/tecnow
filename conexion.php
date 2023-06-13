<?php
$server="localhost";
$user="root";
$pwd="root";
$bd="tecnow";

// CREACIÓN DE LA CONEXIÓN
$conn=new mysqli($server,$user,$pwd,$bd);

// REVISIÓN DE LA CONEXIÓN
if($conn->connect_error){
    die("Fallo la conexión: ".$conn->connect_error);
}
?>