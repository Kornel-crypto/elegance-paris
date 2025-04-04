<?php 

include 'config.php';

$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':id', $id);
$stmt->execute();




header("Location: /elegance-paris/public/collection.php");