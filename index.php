<?php
include("conexion.php");
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>TecNow - Lo mejor en tecnología</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- HEADER -->
        <?php
			include('models/header.php');
		?>

        <!-- MAIN -->
        <section id="main">
            <div class="container">
                <div class="row gtr-200">
                    <div class="col-12">
                        <section class="box highlight">
                            <ul class="special">
                                <li><a href="#" class="icon solid fa-solid fa-mobile"><span class="label"></span></a>
                                </li>
                                <li><a href="#" class="icon solid fa-laptop"><span class="label"></span></a></li>
                                <li><a href="#" class="icon solid fa-headphones"><span class="label"></span></a></li>
                            </ul>
                            <header>
                                <h2>TODO TIPO DE PRODUCTOS</h2>
                                <p>Aquí encontrarás productos como celulares, tabletas, laptops y computadoras, además
                                    de accesorios para cualquier tipo.</p>
                            </header>
                        </section>
                    </div>


                    <!-- OFERTAS -->
                    <div class="col-12">
                        <section class="box features">
                            <h2 class="major"><span>OFERTAS</span></h2>
                            <div class="carousel">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <a href="productos.php">
                                            <div class="carousel-item active">
                                                <img src="images/promo1.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="images/promo2.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="images/promo3.png" class="d-block w-100" alt="...">
                                            </div>
                                        </a>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Anterior</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Siguiente</span>
                                    </button>
                                </div>

                            </div>
                        </section>

                        <!-- QUIÉNES SOMOS -->
                        <div class="container">
                            <div class="row gtr-200">
                                <div class="col-12">
                                    <section>
                                        <h2 class="major"><span>¿Quiénes somos?</span></h2>
                                        <p class="lh-lg text-center">
                                            TecNow es un lugar diseñado especialmente para los compradores que busquen
                                            un producto, ya sea una computadora, tablet, celular, laptop, unos audífonos
                                            o algún cable que no encuentras en algún lugar, ¡aquí lo tenemos!.
                                            Empresa 100% mexicana, con los mejores precios del mercado y con tu envío
                                            totalmente seguro, al igual que toda tu información personal y bancaria, ya
                                            que contamos con la seguridad más avanzada en complemento a nuestro sitio
                                            web, para que puedas navegar sin ningún problema.
                                        </p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- FOOTER -->
    <?php
        include('models/footer.php');
    ?>

    <!-- SCRIPTS (IGNORAR) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>



