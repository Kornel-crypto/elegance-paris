<?php

require 'php/config.php';

// là je construit des tableaux à inserer //

$produits = [
    [
        'name' => 'Chapeau Fedora',
        'description' => 'Un classic du chic en feutre noire',
        'price' => 99.99,
        'stock' => 10,
        'type' => 'chapeau'
    ],
    [
        'name' => 'Gants en cuir véritable noir',
        'description' => "Alliance du confort et de l'élégance",
        'price' => 79.50,
        'stock' => 15,
        'type' => 'gant'
    ],
    [
        'name' => 'Canne en bois de ceriser',
        'description' => 'Canne tressée de manière traditionel',
        'price' => 149.00,
        'stock' => 5,
        'type' => 'canne'
    ],
    [
        'name' => 'Chapeau Panama',
        'description' => "Idéal pour les journées d'été",
        'price' => 59.90,
        'stock' => 20,
        'type' => 'chapeau'
    ]
    ];

foreach ($produits as $produit) {
    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, stock, type) VALUE (:name, :description, :price, :stock, :type)");
    $stmt->execute([
        'name' => $produit['name'],
        'description' => $produit['decription'],
        'price' => $produit['price'],
        'stock' => $produit['stock'],
        'type' => $produit['type']
    ]);
    }

echo 'les Produits ont été enregistrés avec succés 👍';

?>