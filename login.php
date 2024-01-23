<?php
session_start();
if (isset($_SESSION["email"])) {
    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Login</title>

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <?php
                            if (isset($_SESSION["error"]) && isset($_SESSION["error-type"])) {
                                echo '<div class="text-center">
                                    <div class="card-body ' . $_SESSION["error-type"] . '" id="card">
                                        ' . $_SESSION["error"] . '
                                    </div>
                                </div>';
                                unset($_SESSION["error"]);
                                unset($_SESSION["error-type"]);
                            }
                            ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>
                            <form class="user" action="/controller/compte/login.php" method="post">

                                <div class="form-group mb-4">
                                    <label class="form-label" for="exampleInputEmail">Email</label>
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="exemple@exemple.com">
                                </div>
                                <div class="form-group mb-3 mb-sm-4">
                                    <label class="form-label" for="exampleInputPassword">Password</label>

                                    <div class="position-relative">
                                        <input type="password" name="mdp" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        <span id="eye" class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row d-flex flex-wrap justify-content-between align-items-baseline mb-2">
                                    <div class="form-group mb-sm-4 mb-1">
                                        <div class="form-check custom-checkbox ms-1">
                                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                            <label class="form-check-label" for="basic_checkbox_1">Remember</label>
                                        </div>

                                    </div>
                                    <div class="form-group ms-2">
                                        <a href="forgot-password.php">Forgot Password?</a>

                                    </div>
                                </div>
                                <button name="btn" type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="new-account mt-3">
                                <p>Don't have an account? <a class="text-primary" href="register.php">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/deznav-init.js"></script>
    <script>
        $(document).ready(function() {
            var eyeElement = $("#eye");
            var passwordInput = $("#exampleInputPassword");

            eyeElement.click(function() {
                if (eyeElement.hasClass("show-pass") && eyeElement.hasClass("eye") && eyeElement.hasClass("active")) {
                    passwordInput.attr("type", "text");
                } else {
                    passwordInput.attr("type", "password");
                }
            });
        });
    </script>
</body>

</html>