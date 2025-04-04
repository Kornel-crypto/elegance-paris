<?php include '../php/config.php';
include 'header.php'; 

    $sql = 'SELECT * FROM orders ORDER BY customer_email';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <section class='grid grid-cols-2'>
<?php foreach ($orders as $order): ?>

    <div class="carte-produit border-2 flex col-start-1">
        <h2><?= $order['customer_email'] ?></h2>
        <p><?= $order['product_name'] ?></p>
        <p><?= $order['quantity'] ?></p>
        <p><?= $order['total_price'] ?> €</p>
    </div>

<?php endforeach; ?>

<div class="">
    <form action="../php/add_article.php" class="flex flex-col" method='POST'>
        <label for="name">Nom:
            <input type="text" name="name" placeholder="nom du produit" required>
        </label>
        <label for="description">Description:
            <textarea name="description" id="" required></textarea>
        </label>
        <label for="price">Prix :
            <input type="text" name="price" placeholder="prix du produit" required>
        </label>
        <label for="stock">Stock: 
            <input type="text" name="stock" placeholder="Quantité en stock" required>
        </label>
        <select name="type" required>
            <option value="">--Choisir un genre--</option>
            <option value="chapeau">Chapeau</option>
            <option value="canne">Canne</option>
            <option value="gant">Gants</option>
        </select>
        <input type="submit" value="Ajouter un article" class="p-2 bg-blue-800 text-white">
    </form>
</div>
</section>


<?php include 'footer.php'; ?>