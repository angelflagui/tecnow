<?php
include("config.php");
$id=$_GET['id'];
$sql="SELECT id, producto, descripcion, descripcion_eng, precio, categoria_id, marca_id, stock FROM productos WHERE id=$id";
$resultado=mysqli_query($conn, $sql)or die (mysqli_error($conn));
$fila=mysqli_fetch_assoc($resultado); 

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
    <title>Modificar - TecNow</title>
</head>

<body>
    <!-- HEADER -->
    <div class="container-fluid bg-warning">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <a href="insertar.html">
                        <h3 class="text-center">TecNow Crud</h3>
                    </a>
                </header>
            </div>
        </div>
    </div>



    <div class="header">
        <h2 class="text-center mt-4 mb-5">Actualizar producto</h2>
    </div>

    <div class="container">
        <form class="m-auto w-50 mt-2 mb-2" method="post" action="actualizar2.php" >

            <div class="mb-2">
                <label class="form-label">Producto</label>
                <input class="form-control form-control-sm" type="text" name="producto" id="" value="<?php echo $fila['producto'];?>" />
            </div>

            <div class="mb-2">
                <label class="form-label">Descripción</label>
                <input class="form-control form-control-sm" type="text" name="descripcion" id="" value="<?php echo $fila['descripcion'];?>" />
            </div>

            <div class="mb-2">
                <label class="form-label">Descripción (inglés)</label>
                <input class="form-control form-control-sm" type="text" name="descripcion_eng" id="" value="<?php echo $fila['descripcion_eng'];?>" />
            </div>

            <div class="mb-2">
                <label class="form-label">Precio</label>
                <input class="form-control form-control-sm" type="text" name="precio" id="" value="<?php echo $fila['precio'];?>" />
            </div>

            <div class="mb-2">
                <label class="form-label">Categoría</label>
                <input class="form-control form-control-sm" type="text" name="categoria" id="" value="<?php echo $fila['categoria_id'];?>" />
            </div>

            <div class="mb-2">
                <label class="form-label">Marca</label>
                <input class="form-control form-control-sm" type="text" name="marca" id="" value="<?php echo $fila['marca_id'];?>" />
            </div>

            <div class="mb-2">
                <label class="form-label">Marca</label>
                <input class="form-control form-control-sm" type="text" name="stock" id="" value="<?php echo $fila['stock'];?>" />
            </div>

            <div class="mb-2">
                <label class="form-label">ID</label>
                <input class="form-control form-control-sm" type="text" name="id" id="" value="<?php echo $fila['id'];?>" />
            </div>

            <button class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>

</html>