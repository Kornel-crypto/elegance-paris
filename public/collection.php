<?php include 'header.php';
require '../php/config.php';
session_start();
?>
<script src="panier.js" defer></script>


<div class="carte-produit" data-id="CHAP-001" data-nom="Chapeau feutre gris" data-prix="119.00" data-image="images/chapeau-gris.jpg">
  <img src="images/chapeau-gris.jpg" alt="Chapeau feutre gris">
  <h3>Chapeau feutre gris</h3>
  <p>119.00 €</p>
  <button class="ajouter-panier">Ajouter au panier</button>
</div>

<div class="carte-produit" data-id="CHAP-002" data-nom="Chapeau feutre noir" data-prix="145.00" data-image="images/chapeau-noir.jpg">
  <img src="images/chapeau-noir.jpg" alt="Chapeau feutre noir">
  <h3>Chapeau feutre noir</h3>
  <p>145.00 €</p>
  <button class="ajouter-panier">Ajouter au panier</button>
</div>

<div class="carte-produit" data-id="CHAP-003" data-nom="Chapeau feutre jaune" data-prix="119.00" data-image="images/chapeau-jaune.jpg">
  <img src="images/chapeau-jaune.jpg" alt="Chapeau feutre jaune">
  <h3>Chapeau feutre gris</h3>
  <p>119.00 €</p>
  <button class="ajouter-panier">Ajouter au panier</button>
</div>

<div class="carte-produit" data-id="CHAP-004" data-nom="Chapeau feutre vert" data-prix="159.00" data-image="images/chapeau-vert.jpg">
  <img src="images/chapeau-vert.jpg" alt="Chapeau feutre vert">
  <h3>Chapeau feutre vert</h3>
  <p>159.00 €</p>
  <button class="ajouter-panier">Ajouter au panier</button>
</div>






<?php include 'footer.php'; ?>