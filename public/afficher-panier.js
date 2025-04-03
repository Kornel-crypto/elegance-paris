const panier = JSON.parse(localStorage.getItem("panier")) || [];

const conteneur = document.getElementById("contenu-panier");

const totalAffichage = document.getElementById("total-panier");

let total = 0;

if (panier.length === 0) {
  conteneur.innerHTML = "<p>Votre panier est vide.</p>";
} else {
  panier.forEach((article) => {
    const sousTotal = article.prix * article.quantite;

    total += sousTotal;

    const bloc = document.createElement("div");
    bloc.classList.add("article-panier");
    // À l’intérieur du forEach (on remplace le bloc.innerHTML actuel par celui-ci) :

    bloc.innerHTML = `
  <img src="${article.image}" alt="${article.nom}" width="100">
  <h3>${article.nom}</h3>
  <p>Prix : ${article.prix} €</p>
  <p>Quantité : ${article.quantite}</p>
  <p>Sous-total : ${sousTotal.toFixed(2)} €</p>
  <button class="supprimer-article" data-id="${article.id}">Supprimer</button>
  <hr>
  `;

    conteneur.appendChild(bloc);
  });

  totalAffichage.textContent = `Total : ${total.toFixed(2)} €`;
}
// on prend tous les boutons
const boutonsSupprimer = document.querySelectorAll(".supprimer-article");

// eoute les clicks
boutonsSupprimer.forEach((bouton) => {
  bouton.addEventListener("click", () => {
    const idASupprimer = bouton.dataset.id;

    const nouveauPanier = panier.filter(
      (article) => article.id !== idASupprimer
    );

    // On met à jour le localStorage
    localStorage.setItem("panier", JSON.stringify(nouveauPanier));

    //Recharge la page pour voir le changement
    location.reload();
  });
});
// ici on peut vider vider le panier"
const boutonVider = document.getElementById("vider-panier");

boutonVider.addEventListener("click", () => {
  localStorage.removeItem("panier");
  location.reload();
  // location.reload() sert à recharger la page
});

const boutonValider = document.getElementById("valider-commande");

boutonValider.addEventListener("click", () => {
  const panier = JSON.parse(localStorage.getItem("panier")) || [];

  // bon là c'est juste pour vérif si le panier et vide tous simplement //
  if (panier.length === 0) {
    alert("votre panier est vide. impossible de valider la commande.");
    return;
  }

  // là on prépare les données que l'on vas envoyé //
  const donneesCommande = {
    date: new Date().toISOString(),
    total: panier.reduce(
      (acc, article) => acc + article.prix * article.quantite,
      0
    ),
    aricles: panier,
  };
  console.log("Commande à envoyer : ", donneesCommande);

  // la on fait un test //
  alert("Commande prête à être envoyée");
});
