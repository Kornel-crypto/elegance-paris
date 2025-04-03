<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Élégance Parisienne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Inter", sans-serif;
      }
      h1,
      h2,
      h3 {
        font-family: "Playfair Display", serif;
      }
    </style>
  </head>
  <body class="bg-neutral-50 text-gray-900">
    <header class="bg-white shadow-md sticky top-0 z-50">
      <div
        class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center"
      >
      <a href="/elegance-paris/public/index.php">
        <h1 class="text-2xl text-gray-800">🕴️ Élégance Parisienne</h1>
      </a>
      <form action="/elegance-paris/php/searchbar.php" method="get">
        <input type="text" name="search" placeholder="Rechercher" class="border border-gray-300 rounded-md px-2 py-1">
      </form>
        <nav class="space-x-6 text-sm">
          <?php if(isset($_SESSION['admin'])):?>
          <a href="">page admin</a>
          <?php endif ?>
          <a href="/elegance-paris/public/index.php" class="text-gray-600 hover:text-black"
            >Accueil</a
          >
          <a href="/elegance-paris/public/panier.php" class="text-gray-600 hover:text-black"  // je met ici une autre adresse pour faire un test //
            >Panier</a
          >
          <a href="/elegance-paris/public/collection.php" class="text-gray-600 hover:text-black">Nos Collections</a>
          <?php if(!isset($_SESSION['login'])): ?>
          <a href="/elegance-paris/public/login.php" class="text-gray-600 hover:text-black">
            Connexion
            </a>
          <?php else: ?>
            <a href="/elegance-paris/php/logout.php" class="text-gray-600 hover:text-black">Deconnexion</a>
          <?php endif; ?>
        </nav>
      </div>
    </header>