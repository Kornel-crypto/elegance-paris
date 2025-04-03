<?php 

include 'config.php';

// var_dump($_GET['type']);

function getProductsByType($type){
    global $conn;
    $sql ='SELECT * FROM products WHERE type = :type';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['type' => $type]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}