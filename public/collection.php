<?php include 'header.php';
require '../php/config.php';
session_start();

// Initialiser le panier s’il n’existe pas encore
if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = [];
}

// Si on reçoit un paramètre ?add=ID
if (isset($_GET['add'])) {
  $id = (int) $_GET['add'];

  // Ajouter au panier ou augmenter la quantité
  if (isset($_SESSION['panier'][$id])) {
    $_SESSION['panier'][$id]++;
  } else {
    $_SESSION['panier'][$id] = 1;
  }

  // Rediriger pour éviter d'ajouter plusieurs fois si on actualise
  header('Location: collections.php');
  exit();
}
?>


<main class="py-20 px-6 max-w-7xl mx-auto ">
  <h2 class="text-3xl text-center mb-12">Nos collections</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

      <!-- Carte produit 1 -->
    <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition">
      <div class="text-6xl mb-4">🎩</div>
      <h3 class="text-xl font-semibold mb-2">Chapeaux élégants</h3>
      <p class="text-gray-500 mb-3">Classe intemporelle.</p>
      <button class="bg-black text-white px-4 py-2 text-sm rounded hover:bg-gray-800 transition">Voir</button>
    </div>

 <!-- Produit -->
          <div
            class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition"
          >
            <div class="text-6xl mb-4">🧤</div>
            <h3 class="text-xl font-semibold mb-2">Gants raffinés</h3>
            <p class="text-gray-500 mb-3">Le détail discret mais essentiel.</p>
            <button class="bg-black text-white px-4 py-2 text-sm rounded hover:bg-gray-800 transition">Voir</button>
          </div>

<!-- Produit -->
          <div
            class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition"
          >
            <div class="text-6xl mb-4">🦯</div>
            <h3 class="text-xl font-semibold mb-2">Cannes de marche</h3>
            <p class="text-gray-500 mb-3">Élégance et distinction à chaque pas.</p>
            <button class="bg-black text-white px-4 py-2 text-sm rounded hover:bg-gray-800 transition">Voir</button>
          </div>
        </div>

</main>






<?php include 'footer.php'; ?>