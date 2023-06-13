<!DOCTYPE HTML>
<html>
<head>
    <title>Contact - TecNow</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- HEADER -->
    <?php
		include('models/headerENG.php');
	?>

    <!-- FORMULARIO -->
    <div class="container">
        <h5 class="text-center p-5">Feel free to send all your questions, advices or complaint. If you are interested in
            any product, tell us which one and we will reach out to you.</h5>
        <p class="lh-lg text-center">Your opinion is very important to us!</p>
        <form class="row g-3 mt-5" action="mailto:ayuda@tecnow.com" method="post" enctype="text">
            <div class="col-md-6">
                <label for="inputName" class="form-label">FIRST NAME</label>
                <input type="text" class="form-control" id="inputName">
            </div>

            <div class="col-md-6">
                <label for="inputLastName" class="form-label">LAST NAME</label>
                <input type="text" class="form-control" id="inputLastName">
            </div>

            <div class="col-12">
                <label for="inputEmail" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="example@example.com">
            </div>

            <div class="col-12">
                <label for="inputMessage" class="form-label">MESSAGE</label>
                <input type="text" class="form-control" id="inputMessage" placeholder="Type your message...">
            </div>

            <div class="col-12 pt-5">
                <div class="text-center">
                    <button type="submit" value="send" class="button">SEND MESSAGE</button>
                </div>
            </div>
        </form>
    </div>

    <!-- FOOTER -->
    <?php
        include('models/footerENG.php');
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