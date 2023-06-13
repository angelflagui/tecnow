<?php
function conexion(){
    $con = mysqli_connect('localhost','root','root','tecnow');
    return $con;
}
function listar($conexion){
    $sql = "SELECT * FROM productos";
    $query = mysqli_query($conexion, $sql);
    return $query;
}

function insertar($conexion, $producto, $descripcion, $precio, $imagen, $categoria, $marca, $stock){
    $sql = "INSERT INTO productos(producto, descripcion, precio, imagen, categoria, marca, stock) VALUES('$producto', '$descripcion','$precio', '$imagen', '$categoria', '$marca', '$stock')";
    $query = mysqli_query($conexion, $sql);
    return $query;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>

    <!-- HEADER -->
    <div class="container-fluid bg-warning">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h3 class="text-center">TecNow Crud</h3>
                </header>
            </div>
        </div>
    </div>

    <div class="container">
        <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="insertar.php">
            <div class="mb-2">
                <label class="form-label">Producto</label>
                <input class="form-control form-control-sm" type="text" name="producto">
            </div>

            <div class="mb-2">
                <label class="form-label">Descripción</label>
                <input class="form-control form-control-sm" type="text" name="descripcion">
            </div>

            <div class="mb-2">
                <label class="form-label">Precio</label>
                <input class="form-control form-control-sm" type="text" name="precio">
            </div>

            <div class="mb-2">
                <label class="form-label">Imagen</label>
                <input type="file" class="form-control form-control-sm" type="file" name="imagen">
            </div>

            <div class="mb-2">
                <label class="form-label">Categoría</label>
                <input class="form-control form-control-sm" type="text" name="categoria">
            </div>

            <div class="mb-2">
                <label class="form-label">Marca</label>
                <input class="form-control form-control-sm" type="text" name="marca">
            </div>

            <div class="mb-2">
                <label class="form-label">Stock</label>
                <input class="form-control form-control-sm" type="text" name="stock">
            </div>

            <button class="btn btn-primary">Subir</button>

        </form>

    </div>

    <!-- CRUD -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Lista de productos
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Categoría</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    include('conexion.php');
                                    $conexion = conexion();
                                    $query = listar($conexion);
                                    while($datos = mysqli_fetch_assoc($query)) {
                                        $id = $datos['id'];
                                        $producto = $datos['producto'];
                                        $descripcion = $datos['descripcion'];
                                        $precio = $datos['precio'];
                                        $imagen = $datos['imagen'];
                                        $categoria = $datos['categoria_id'];
                                        $marca = $datos['marca_id'];
                                        $stock = $datos['stock'];

                                        $valor = "";
                                        if($imagen == 'jpg' || 'png'){
                                            $valor = "<img width='64px' src='data:image/jpg;base64,".base64_encode($imagen)."'>";
                                        }
                                ?>
                                <tr>
                                    <td scope="row"><?php echo $id?></td>
                                    <td><?php echo $producto?></td>
                                    <td><?php echo $descripcion?></td>
                                    <td><?php echo $precio?></td>
                                    <td><?php echo $valor?></td>
                                    <td><?php echo $categoria?></td>
                                    <td><?php echo $marca?></td>
                                    <td><?php echo $stock?></td>
                                    <td><a class="btn btn-secondary" href="#">Editar</a></td>
                                    <td><a class="btn btn-danger" href="#">Eliminar</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>