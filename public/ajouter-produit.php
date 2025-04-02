<?php

include '../php/config.php';

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
    ?>

<a href="collections.php?add=<?= $product['id'] ?>" class="bg-black text-white px-4 py-2 text-sm rounded hover:bg-gray-800 transition">Ajouter au panier</a>

