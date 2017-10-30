<?php

session_start();
session_destroy();
unset($_SESSION['email']);
$_SESSION['message'] = "Uspjesno ste se odjavili";
header("location: index.php");

?>
