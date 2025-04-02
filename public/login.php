<?php include 'header.php'; ?>

<form action="../php/login.php" method="post" class="flex flex-col items-center gap-2">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" value="Submit" class="bg-red-300 cursor-pointer m-2 p-1">
</form>
<a href="register.php" class="text-xl flex justify-center">S'inscrire</a>

<?php include 'footer.php'; ?>