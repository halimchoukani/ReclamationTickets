<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Tixia - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">

    <meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, bootstrap admin, coupon, deal, modern, responsive admin dashboard, ticket, ticket dashboard, ticket system, admin panel,	Ticketing admin, Dashboard template, Bootstrap HTML, Ticket management, Event ticketing, Responsive design, User-friendly interface, Efficiency, Streamlining operations, Event management, Ticket sales, Customizable template, Stylish design, Modern dashboard">
    <meta name="description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">

    <meta property="og:title" content="Tixia - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
    <meta property="og:description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
    <meta property="og:image" content="page-error-404.html">
    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="Tixia - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
    <meta name="twitter:description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
    <meta name="twitter:image" content="page-error-404.html">
    <meta name="twitter:card" content="summary_large_image">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="fix-wrapper">

        <!-- Outer Row -->
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="index.html"><img class="logo-auth" src="assets/images/logo-full.png" alt=""></a>
                            </div>

                            <div class="text-center mb-4">
                                <h1 class="h4 text-gray-900 mb-2">Vous avez oublié votre mot de passe?</h1>
                            </div>
                            <form class="user" method="post" action='controller/compte/forgot-password.php'>
                                <?php
                                if (isset($_SESSION["error"]) && isset($_SESSION["error-type"])) {
                                    echo '<div class="card shadow mb-4">
                                    <div class="card-body ' . $_SESSION["error-type"] . '" id="card">
                                        ' . $_SESSION["error"] . '
                                    </div>
                                </div>';
                                    unset($_SESSION["error"]);
                                    unset($_SESSION["error-type"]);
                                }
                                ?>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail">Email</label>
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="hello@exemple.com" name="email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="btn">
                                    Réinitialiser le mot de passe
                                </button>
                            </form>
                            <hr>
                            <div class="text-center mb-2">
                                <a href="register.html">Créer un compte !</a>
                            </div>
                            <div class="text-center mb-2">
                                <a href="login.html">Vous avez déjà un compte ? Login !</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>



</body>

</html>