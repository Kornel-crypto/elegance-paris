<?php 

include 'config.php';

$id = $_GET['id'];
$sql= "DELETE FROM products WHERE id = :id";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();