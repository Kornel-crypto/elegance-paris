<?php include 'header.php'; ?>

<form action="../php/register.php" method="post" class="flex flex-col items-center gap-2 mt-6">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" required>
    <label for="firstname">Prenom</label>
    <input type="text" name="firstname" required>
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" required>
    <input type="submit" value="Inscription" class="bg-red-300 cursor-pointer m-2 p-1">
</form>
<a href="login.php" class="text-xl flex justify-center mb-8">Se connecter</a>

<?php include 'footer.php'; ?>