const panier = JSON.parse(localStorage.getItem("panier")) || [];

const conteneur = document.getElementById("contenu-panier");
const totalAffichage = document.getElementById("total-panier");

let total = 0;

function afficherPanier(panierActuel) {
  conteneur.innerHTML = "";
  total = 0;

  if (panierActuel.length === 0) {
    conteneur.innerHTML = "<p>Votre panier est vide.</p>";
    totalAffichage.textContent = "Total : 0 €";
    return;
  }

  panierActuel.forEach((article) => {
    const sousTotal = article.prix * article.quantite;
    total += sousTotal;

    const bloc = document.createElement("div");
    bloc.classList.add("article-panier");
    bloc.innerHTML = `
      <h3>${article.nom}</h3>
      <p>Prix : ${article.prix} €</p>
      <p>Quantité : ${article.quantite}</p>
      <p>Sous-total : ${sousTotal.toFixed(2)} €</p>
      <button class="supprimer-article" data-id="${
        article.id
      }">Supprimer</button>
      <hr>
    `;

    conteneur.appendChild(bloc);
  });

  totalAffichage.textContent = `Total : ${total.toFixed(2)} €`;

  document.querySelectorAll(".supprimer-article").forEach((bouton) => {
    bouton.addEventListener("click", () => {
      const idASupprimer = bouton.dataset.id;
      const nouveauPanier = panier.filter((a) => a.id !== idASupprimer);
      localStorage.setItem("panier", JSON.stringify(nouveauPanier));
      location.reload();
    });
  });
}

afficherPanier(panier);

document.getElementById("vider-panier").addEventListener("click", () => {
  localStorage.removeItem("panier");
  location.reload();
});

document.getElementById("valider-commande").addEventListener("click", () => {
  if (panier.length === 0) {
    alert("Votre panier est vide. Impossible de valider.");
    return;
  }

  const donneesCommande = {
    articles: panier,
  };

  fetch("../php/enregistrer_commande.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(donneesCommande),
  })
    .then((res) => res.json())
    .then((data) => {
      alert(data.message);
      localStorage.removeItem("panier");
      location.reload();
    })
    .catch((error) => {
      console.error("Erreur lors de l'envoi :", error);
      alert("Erreur lors de la commande.");
    });
});
