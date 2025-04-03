<?php 

include 'config.php';

if(isset($_GET['search'])){
    $search = $_GET['search'];
    $sql = 'SELECT * FROM products WHERE name LIKE :search OR description LIKE :search';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['search' => "%$search%"]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

header('Location: /elegance-paris/public/collection.php');
exit;