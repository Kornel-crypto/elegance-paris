document.querySelectorAll(".ajouter-panier").forEach((bouton) => {
  bouton.addEventListener("click", () => {
    const carte = bouton.closest(".carte-produit");
    const nom = carte.dataset.nom;
    const prix = parseFloat(carte.dataset.prix);
    const id = carte.dataset.id;

    const image = "la place d'une image";
    const panier = JSON.parse(localStorage.getItem("panier")) || [];

    const articleExistant = panier.find((item) => item.id === id);

    if (articleExistant) {
      articleExistant.quantite += 1;
    } else {
      panier.push({
        id,
        nom,
        prix,
        quantite: 1,
        image,
      });
    }

    localStorage.setItem("panier", JSON.stringify(panier));
    alert(`${nom} a été ajouté au panier`);
  });
});
