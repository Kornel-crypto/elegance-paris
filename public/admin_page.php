<?php include '../php/config.php';
include 'header.php'; 

    $sql = 'SELECT * FROM orders ORDER BY customer_email';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($orders as $order): ?>

    <div class="carte-produit border-2">
        <h2><?= $order['customer_email'] ?></h2>
        <p><?= $order['product_name'] ?></p>
        <p><?= $order['quantity'] ?></p>
        <p><?= $order['total_price'] ?> €</p>
    </div>

<?php endforeach; ?>




<?php include 'footer.php'; ?>