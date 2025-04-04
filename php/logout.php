<?php 

include 'config.php';
session_start();
session_unset();
session_destroy();

session_start();
$_SESSION['logout_confirm'] = true;

header("Location: /elegance-paris/public/index.php");
exit;