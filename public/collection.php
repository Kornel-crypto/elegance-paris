<?php
include 'header.php';
require '../php/config.php';
session_start();



// Requête pour récupérer les produits depuis la table "products"
$produits = $conn->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
?>

<script src="panier.js" defer></script>

<h1>🧢 Collection Élégance Paris</h1>

<div class="collection">
  <?php foreach ($produits as $produit): ?>
    <div class="carte-produit"
      data-id="<?= $produit['id'] ?>"
      data-nom="<?= htmlspecialchars($produit['name']) ?>"
      data-prix="<?= $produit['price'] ?>"
      data-image="<?= htmlspecialchars($produit['image']) ?>"
    >
      <img src="<?= htmlspecialchars($produit['image']) ?>"
           alt="<?= htmlspecialchars($produit['nom']) ?>"
           title="<?= htmlspecialchars($produit['descr']) ?>"
           width="200"
      >
      <h3><?= htmlspecialchars($produit['name']) ?></h3>
      <p><?= number_format($produit['price'], 2, ',', ' ') ?> €</p>
      <button class="ajouter-panier">Ajouter au panier</button>
    </div>
  <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>

