<?php
session_start();
session_destroy();
session_start();
$_SESSION["error"] = "<div class='error red'>Vous êtes déconnecté avec succés .</div>";
header("location:login.php");
