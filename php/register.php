<?php 

include 'config.php';

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO customers(lastname, firstname, email, password) VALUES('$lastname', '$firstname', '$email', '$password')";
$stmt = $conn->prepare($sql);
$stmt->execute();
