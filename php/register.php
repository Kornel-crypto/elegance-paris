<?php 

include 'config.php';

$lastname = trim($_POST['lastname']);
$firstname = trim($_POST['firstname']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    die("Email non valide");
}

$sql = "INSERT INTO customers(lastname, firstname, email, password) VALUES(:lastname, :firstname, :email, :password)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
$stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

$stmt->execute();

header("Location: /elegance-paris/public/login.php");
exit;