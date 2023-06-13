<?php
// Initialize the session
session_start();
include("conexion.php");
$sql = "SELECT id, producto, descripcion,descripcion_eng, precio, imagen, categoria_id, marca_id, stock FROM productos";
$resultado = $conn->query($sql);
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Products - TecNow</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- HEADER -->
        <?php
        include('models/headerENG.php');
        ?>
        <!-- Main -->
        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">

                            <h2 class="text-center">ALL PRODUCTS</h2>

                            <!-- Content -->

                            <article class="box page-content">
                                <section>
                                    <span class="image featured"><img src="images/pic05.jpg" alt="" /></span>
                                </section>
                            </article>

                        </div>
                    </div>
                    <div class="col-12">

                        <!-- Features -->
                        <section class="box features">
                            <div>
                                <!-- Productos  -->
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                    <?php foreach ($resultado as $row) { ?>
                                    <?php $image = $row['imagen']?>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-image">
                                                <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'"/>'; ?>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $row['producto']; ?></h5>
                                                <a href="#modal_<?php echo $row['id']; ?>" class="btn-open-popup">See more</a>
                                                <div class="container-all" id="modal_<?php echo $row['id']; ?>">
                                                    <div class="popup">
                                                        <div class="card-image-modal">
                                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image) .'" />';?>
                                                        </div>
                                                        <div class="container-text">
                                                            <h3> <?php echo $row['producto']; ?> </h3>
                                                            <h1> Product description: <br>
                                                                <?php echo $row['descripcion_eng']; ?> </h1>
                                                            <h1> Stock: <?php echo $row['stock']; ?> </h1>
                                                            <h1> Price: $<?php echo $row['precio']; ?> </h1>
                                                            <a href="contactoENG.php"><button type="button" class="btn btn-success">Buy</button></a>
                                                        </div>
                                                        <a href="#" class="btn-close-popup">x</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                        </section>
                    </div>
                </div>
        </section>
    </div>

    <!-- FOOTER -->
    <?php
    include('models/footerENG.php');
    ?>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>