<?php
require 'config.php';
session_start();
header('Content-Type: application/json');

// Récupérer les données JSON envoyées
$data = json_decode(file_get_contents("php://input"), true);

if (!$data || !isset($data['articles'])) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Aucune donnée reçue ou format incorrect."
    ]);
    exit;
}

$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;

try {
    foreach ($data['articles'] as $article) {
        $stmt = $conn->prepare("INSERT INTO orders (customer_email, product_name, quantity, total_price) VALUES (?, ?, ?, ?)");

        $name = $article['nom'];
        $quantity = $article['quantite'];
        $total = $article['prix'] * $article['quantite'];

        $stmt->execute([$email, $name, $quantity, $total]);
    }

    echo json_encode(["status" => "success", "message" => "Commande enregistrée avec succès."]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Erreur serveur : " . $e->getMessage()
    ]);
}
