<?php

$server="localhost";
$user="root";
$pwd="root";
$bd="tecnow";

//Se crea la conexión
$conn=new mysqli($server,$user,$pwd,$bd);

//revisar la conexión

if($conn->connect_error){

    die("Fallo la conexión: ".$conn->connect_error);
}

?>