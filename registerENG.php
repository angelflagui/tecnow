<?php
// Include config file
require_once "conexion.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usuarios WHERE nombre = ?";
        
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        
        $seg_nom=$_POST['Segundo_nombre'];
        $apep=$_POST['Apellido_paterno'];
        $apem=$_POST['Apellido_materno'];
        $fecha_nacimiento=$_POST['Fecha_de_nacimiento'];
        $correo=$_POST['Correo'];

        $sql = "INSERT INTO usuarios (nombre, primer_apellido, segundo_apellido, segundo_nombre, fecha_nacimiento, correo, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssss", $param_username, $param_seg_nom, $param_apep, $param_apem, $param_fecha_nacimiento, $param_correo, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_seg_nom = $seg_nom;
            $param_apep = $apep;
            $param_apem = $apem;
            $param_fecha_nacimiento = $fecha_nacimiento;
            $param_correo = $correo;
             $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: loginENG.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $conn->close();
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Sign Up - TecNow </title>
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
			include('models/headerENG.php');
		?>

        <!-- MAIN -->
        <section id="main">
            <div class="container">
                <div class="row gtr-200">
                    <div class="wrapper">
                        <div class="register-header text-center">
                            <br>
                            <h2>SIGN UP</h2>
                            <h4>Fill the blanks to create your account.</h4>
                            <p>Fields marked with * are obligatory.</p>
                        </div>
                        <div class="row h-100 justify-content-center align-items-center">
                            <div class="col-md-4">
                                <form action<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="form-group">
                                        <label>USERNAME *</label>
                                        <input type="text" name="username"
                                            class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                                            value="<?php echo $username; ?>">
                                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>FIRST NAME *</label>
                                    <input type="text" name="Segundo_nombre" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MIDDLE NAME *</label>
                                    <input type="text" name="Apellido_paterno" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>LAST NAME *</label>
                                    <input type="text" name="Apellido_materno" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>BIRTH DATE *</label>
                                    <input type="text" name="Fecha_de_nacimiento" placeholder="YYYY-MM-DD"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>EMAIL *</label>
                                    <input type="text" name="Correo" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>PASSWORD *</label>
                                    <input type="password" name="password"
                                        class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                                        value="<?php echo $password; ?>">
                                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>CONFIRM PASSWORD *</label>
                                    <input type="password" name="confirm_password"
                                        class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                                        value="<?php echo $confirm_password; ?>">
                                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                </div>
                            </div>


                            <div class="btn center p-5">
                                <input type="submit" class="btn btn-danger m-4" value="SIGN UP">
                                <input type="reset" class="btn btn-secondary m-4" value="UNDO">
                                <br><br>
                                <p>Do you have an account? <a href="loginENG.php" class="text-decoration-none">Login.</a></p>

                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
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