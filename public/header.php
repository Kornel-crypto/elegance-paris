<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Élégance Parisienne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link href="style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <style>
      .cormorant-<uniquifier> {
    font-family: "Cormorant", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
  }

  @font-face {
    font-family: 'Helvetica';
    src: url('Helvetica.woff2') format('woff2'),
        url('Helvetica.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Helvetica';
    src: url('Helvetica-Oblique.woff2') format('woff2'),
        url('Helvetica-Oblique.woff') format('woff');
    font-weight: normal;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Helvetica';
    src: url('Helvetica-BoldOblique.woff2') format('woff2'),
        url('Helvetica-BoldOblique.woff') format('woff');
    font-weight: bold;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Helvetica';
    src: url('HelveticaRounded-Bold.woff2') format('woff2'),
        url('HelveticaRounded-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Helvetica';
    src: url('Helvetica-Bold.woff2') format('woff2'),
        url('Helvetica-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Helvetica';
    src: url('Helvetica-Compressed.woff2') format('woff2'),
        url('Helvetica-Compressed.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Helvetica';
    src: url('Helvetica-Light.woff2') format('woff2'),
        url('Helvetica-Light.woff') format('woff');
    font-weight: 300;
    font-style: normal;
    font-display: swap;
}

.box-shadow {
  box-shadow: 0px 3px 13px 4px rgba(0,0,0,0.1);
}

.button {
  width: 190px;
  height: 60px;
  background-color: #0605AB;
  border-radius: 15px;
  text-align: center;
  font-family: Helvetica;
  font-size: 20px;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
}
    </style>
  </head>
  <body class="bg-neutral-50 text-gray-900">
    <header class="bg-[#F1F1F1] w-full">
    <div class="flex justify-between items-center">
          <a href="/elegance-paris/public/index.php" class="ml-[48px]" ><img src="images/logo.svg" alt="Logo Elegance Parisienne"></a>
          <h1 class="text-[40px] font-[Cormorant] font-semibold mb-[23px] mr-[55px]">Élégance Parisienne</h1>
          <a href="/elegance-paris/public/panier.php" class="mr-[48px] mb-[23px]"><img src="images/panier.svg" alt="Panier"></a>
      </div>
        <div class="flex justify-center items-center gap-x-[140px] mt-[-10px] pb-[10px] font-[Helvetica] italic">
        <?php if(isset($_SESSION['admin'])):?>
          <a href="">page admin</a>
          <?php endif ?>
          <a href="/elegance-paris/public/index.php" class="text-gray-600 hover:text-black"
            >Accueil</a
          >
          <a href="/elegance-paris/public/collection.php" class="text-gray-600 hover:text-black">Nos Collections</a>
          <?php if(!isset($_SESSION['login'])): ?>
          <a href="/elegance-paris/public/login.php" class="text-gray-600 hover:text-black">
            Connexion
            </a>
          <?php else: ?>
            <a href="/elegance-paris/php/logout.php" class="text-gray-600 hover:text-black">Deconnexion</a>
          <?php endif; ?>
          <form action="/elegance-paris/php/searchbar.php" method="get">
            <input type="text" name="search" placeholder="Rechercher" class="border border-gray-300 rounded-md px-2 py-1">
          </form>
        </div>
        </nav>
      </div>
    </header>
    