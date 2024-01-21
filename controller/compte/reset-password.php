<?php
require_once '../../crud/Crud_account.php';
require_once '../../crud/Crud_code.php';
$token = $_GET['token'];

$code = new Crud_code();
$result = $code->verifCode($token);
if ($result == true) {
    $code->deleteCode($token);
?>
    <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">Changer le mot de passe</h1>
            </div>

            <hr>
            <div class="text-center">
                <a class="small" href="register.html">Create an Account!</a>
            </div>
            <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
            </div>
        </div>
    </div>
<?php
} else {
    $code->deleteCode($token);
?>
    <div class="row-lg-5 text-center">
        <img src="https://static-00.iconduck.com/assets.00/404-page-not-found-illustration-512x249-ju1c9yxg.png" alt="">
    </div>
    <div class="row-lg-7 text-center">
        <h1 class="h4 text-gray-900 mb-4">Code n'existe pas</h1>
        <a href="login.php" class="btn btn-primary">Login</a>
    </div>
<?php
}
?>