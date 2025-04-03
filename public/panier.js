const boutonsAjout = document.querySelectorAll(".ajouter-panier");

boutonsAjout.forEach((bouton) => {
  bouton.addEventListener("click", () => {
    const carte = bouton.closest(".carte-produit");
    const id = carte.dataset.id;
    const nom = carte.dataset.nom;
    const prix = parseFloat(carte.dataset.prix);
    const image = carte.dataset.image;

    const produit = {
      id,
      nom,
      prix,
      image,
      quantite: 1,
    };

    let panier = JSON.parse(localStorage.getItem("panier")) || [];

    const indexProduit = panier.findIndex((item) => item.id === id);

    if (indexProduit !== -1) {
      panier[indexProduit].quantite += 1;
    } else {
      panier.push(produit);
    }

    localStorage.setItem("panier", JSON.stringify(panier));
    alert(`${nom} a été ajouté au panier 🛒`);
  });
});
