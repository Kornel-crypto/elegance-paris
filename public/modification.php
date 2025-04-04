<?php 
include '../php/config.php';

include 'header.php';
$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);
$produit = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$produit) {
    header("Location: /elegance-paris/public/collection.php");
    exit;
}

?> 

<div>
    <h2>Modifier le produit</h2>
    <form action="../php/modifier-produit.php?id=<?= $produit['id'] ?>" method="post">
        <label for="name">Nom du produit : 
            <input type="text" name="name" value="<?= $produit['name'] ?>">
        </label>
        <label for="description">Description : 
            <input type="text" name="description" value="<?= $produit['description'] ?>">
        </label>
        <label for="price">Prix : 
            <input type="text" name="price" value="<?= $produit['price'] ?>">
        </label>
        <input type="submit" value="Modifier">
</div>