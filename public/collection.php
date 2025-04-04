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

<?php include 'categorie.php'; ?>
<script src="panier.js" defer></script>


<h1>🧢 Collection Élégance Paris</h1>

<div class="collection">
  <?php foreach ($produits as $produit): ?>
    
    <div class="carte-produit"
      data-id="<?= $produit['id'] ?>"
      data-nom="<?= htmlspecialchars($produit['name']) ?>"
      data-prix="<?= $produit['price'] ?>">
      <h3><?= htmlspecialchars($produit['name']) ?></h3>
      <p><?= htmlspecialchars($produit['description']) ?></p>
      <p><?= number_format($produit['price'], 2, ',', ' ') ?> €</p>
      <button class="ajouter-panier bg-green-800 text-white p-1">Ajouter au panier</button>
      <?php if(isset($_SESSION['admin'])): ?>
        <a href="modification.php?id=<?= $produit['id'] ?>" class='bg-blue-300 p-2'>Modifier</a>
        <a href="../php/delete_article.php?id=<?php $produit['id'] ?>" class="p-2 bg-red-800 text-white">Supprimer un article</a>
        <p>Stock restant : <?= $produit['stock'] ?></p>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>

