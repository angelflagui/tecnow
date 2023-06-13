<?php
include("config.php"); // CONEXIÓN BD
$sql="SELECT id, producto, descripcion, descripcion_eng, precio, categoria_id, marca_id, stock FROM productos";
$resultado=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Panel de productos - TecNow</title>
</head>

<body>

        <!-- HEADER -->
        <div class="container-fluid bg-warning">
            <div class="row">
                <div class="col-md">
                    <header class="py-3">
                    <a href="insertar.html"><h3 class="text-center">TecNow Crud</h3></a>
                    </header>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="header">
            <h2 class="text-center mt-4 mb-5">Panel de productos</h2>
        </div>

        <div class="row">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Descripcion (inglés)</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Stock</th>
                </tr>

                <?php
    if ($resultado->num_rows >0){
        while ($fila=$resultado->fetch_assoc()){

            echo "<tr>";
            echo " <td>" .$fila['id']."</td>";
            echo " <td>" .$fila['producto']."</td>";
            echo " <td>" .$fila['descripcion']."</td>";
            echo " <td>" .$fila['descripcion_eng']."</td>";
            echo " <td>" .$fila['precio']."</td>"; 
            echo " <td>" .$fila['categoria_id']."</td>"; 
            echo " <td>" .$fila['marca_id']."</td>"; 
            echo " <td>" .$fila['stock']."</td>"; 
            echo " <td><a href='eliminar.php?id=".$fila['id']."'>Eliminar</td>";  
            echo " <td><a href='actualizar.php?id=".$fila['id']."'>Actualizar</td>";
            echo "</tr>";
        }
    }
?>
            </table>
        </div>
    </div>
</body>

</html>