<?php 

include 'config.php';

if(isset($_GET['search'])){
    $search = $_GET['search'];
    $sql = 'SELECT * FROM products WHERE name LIKE :search OR description LIKE :search';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['search' => "%$search%"]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// header('Location: /elegance-paris/public/collection.php?type='.$_GET['search']);
// exit;

include '../public/header.php';

foreach ($products as $product):?>
<script src="../public/panier.js" defer></script>

<div class="carte-produit"
      data-id="<?= $product['id'] ?>"
      data-nom="<?= htmlspecialchars($product['name']) ?>"
      data-prix="<?= $product['price'] ?>">
      <h3><?= htmlspecialchars($product['name']) ?></h3>
      <p><?= htmlspecialchars($product['description']) ?></p>
      <p><?= number_format($product['price'], 2, ',', ' ') ?> €</p>
      <button class="ajouter-panier bg-red-800 text-white p-1">Ajouter au panier</button>
      <?php if(isset($_SESSION['admin'])): ?>
        <a href="modifier-produit.php?id=<?= $product['id'] ?>" class='bg-blue-300 p-2'>Modifier</a>
        <p>Stock restant : <?= $product['stock'] ?></p>
      <?php endif; ?>
    </div>

<?php endforeach;

include '../public/footer.php'; 
?>