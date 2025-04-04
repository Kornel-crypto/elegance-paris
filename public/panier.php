<?php include 'header.php'; ?>

<h1>🛒 Mon Panier</h1>

    <div id="contenu-panier"></div>
    </div>

    <h2 id="total-panier">Total : 0 €</h2>
    <hr>
        <button id="vider-panier">Vider le panier 🗑️</button>
    <hr>
    <?php if(isset($_SESSION['login'])): ?>
        <button id="valider-commande">Valider la commande ✅</button>
    <?php else: ?>
        <button id="valider-commande" disabled>Valider la commande ✔</button>
    <?php endif; ?>

    <script src="afficher-panier.js" defer></script>

<?php include 'footer.php'; ?>