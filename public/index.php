<?php include 'header.php' ?>

    <section
      class="bg-cover bg-center h-[85vh] flex items-center justify-center text-white"
    >
      <div class="bg-black/50 p-10 rounded-lg text-center max-w-2xl">
        <h2 class="text-4xl mb-4">Accessoires de prestige</h2>
        <p class="text-lg mb-6">
          Chapeaux élégants, gants raffinés, cannes de marche distinguées
        </p>
        <a
          href="panier.php"
          class="bg-white text-black px-6 py-2 text-sm font-semibold rounded hover:bg-gray-200 transition"
          >Découvrir la collection</a
        >
      </div>
    </section>
   <!-- // section produit  -->
    <section class="py-20">
      <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl text-center mb-12">Notre sélection</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
          <!-- Produit 1 -->
          <div
            class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition"
          >
            <div class="text-6xl mb-4">🎩</div>
            <h3 class="text-xl font-semibold mb-2">Chapeaux élégants</h3>
            <p class="text-gray-500">Pour une allure intemporelle.</p>
          </div>

          <!-- Produit -->
          <div
            class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition"
          >
            <div class="text-6xl mb-4">🧤</div>
            <h3 class="text-xl font-semibold mb-2">Gants raffinés</h3>
            <p class="text-gray-500">Le détail discret mais essentiel.</p>
          </div>

          <!-- Produit -->
          <div
            class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition"
          >
            <div class="text-6xl mb-4">🦯</div>
            <h3 class="text-xl font-semibold mb-2">Cannes de marche</h3>
            <p class="text-gray-500">Élégance et distinction à chaque pas.</p>
          </div>
        </div>
      </div>
    </section>

    <!--  le footer  encore en chantier-->
<?php include 'footer.php' ?>
