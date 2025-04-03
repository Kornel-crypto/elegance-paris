<?php
include 'header.php';
require '../php/config.php';
include '../php/produits.php';



// Requête pour récupérer les produits depuis la table "products"
if(!isset($_GET['type'])){
  $produits = $conn->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
}
else{
  $type = $_GET['type'];
  $produits = getProductsByType($type);
}
?>

<script src="panier.js" defer></script>

<?php include 'categorie.php'; ?>

<h1>🧢 Collection Élégance Paris</h1>

<div class="collection">
  <?php foreach ($produits as $produit):?>
    <div class="carte-produit"
      data-id="<?= $produit['id'] ?>"
      data-nom="<?= htmlspecialchars($produit['name']) ?>"
      data-prix="<?= $produit['price'] ?>">
      <h3><?= htmlspecialchars($produit['name']) ?></h3>
      <p><?= number_format($produit['price'], 2, ',', ' ') ?> €</p>
      <button class="ajouter-panier">Ajouter au panier</button>
      <?php if(isset($_SESSION['admin'])): ?>
        <a href="modifier-produit.php?id=<?= $produit['id'] ?>" class='bg-blue-300 p-2'>Modifier</a>
        <p>Stock restant : <?= $produit['stock'] ?></p>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>

