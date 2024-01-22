<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
} else {
    header("Location: ../../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reset Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css" id="operaUserStyle"></style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row" id="col">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Changer le mot de passe</h1>
                                    </div>
                                    <form class="user" method="post" action="controller/compte/reset-password.php?token=<?php echo $token; ?>">
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
                                            <input type="password" class="form-control form-control-user" aria-describedby="passwordHelp" placeholder="Enter Votre nouveau mot de passe" name="newpass">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" aria-describedby="passwordHelp" placeholder="Confirmer Votre nouveau mot de passe" name="cnewpass">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="btn">
                                            Reset Password
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div>
                                </div>
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