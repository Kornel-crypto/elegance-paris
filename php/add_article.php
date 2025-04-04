<?php include 'config.php';

echo $_POST['type'];

$name = trim($_POST['name']);
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$type = $_POST['type'];

$sql = "INSERT INTO products(name, description, price, stock, type) VALUES (:name, :description, :price, :stock, :type)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':stock', $stock);
$stmt->bindParam(':type', $type);
$stmt->execute();

// header('Location:/elegance-paris/public/index.php');