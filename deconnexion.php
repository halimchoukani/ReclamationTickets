<?php

session_destroy();
session_start();
$_SESSION["error"] = "<div class='error red'>Vous êtes déconnecté avec succés .</div>";
$_SESSION["delay"] = date("H:i:s");
header("location:login.php");
