<?php include 'header.php';?>

    <section
      class="bg-cover bg-center h-[85vh] flex items-center justify-center text-white"
    >
      <p class="bg-yellow-100 text-black p-1 hidden" id='logout'>Vous etes déconnecté</p>
      <div class="bg-black/50 p-10 rounded-lg text-center max-w-2xl">
        <h2 class="text-4xl mb-4">Accessoires de prestige</h2>
        <p class="text-lg mb-6">
          Chapeaux élégants, gants raffinés, cannes de marche distinguées +++++
        </p>
        <a
          href="panier.php"
          class="bg-white text-black px-6 py-2 text-sm font-semibold rounded hover:bg-gray-200 transition"
          >Découvrir la collection</a
        >
      </div>
    </section>
   
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    <?php if(!empty($_SESSION['logout_confirm'])): ?>
      console.log("bonjour");
      Swal.fire({
        icon: 'success',
        title: 'Deconnexion réussie',
        text: 'Vous etes maintenant hors ligne',
        timer: 3000,
        showConfirmButton: false
      });
    <?php unset($_SESSION['logout_confirm']); ?>
    <?php endif; ?>
  </script>
    <!--  le footer  encore en chantier-->
<?php include 'footer.php' ?>
