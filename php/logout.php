<?php 

include 'config.php';
session_start();
session_unset();
session_destroy();

header("Location: /elegance-paris/public/index.php");
exit;