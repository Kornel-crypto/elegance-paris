<?php include 'header.php'; ?>

<form action="elegance-paris/php/login.php" method="post" class="flex flex-col items-center gap-2">
    <label for="login">login</label>
    <input type="text" name="login">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" value="Submit" class="bg-red-300 cursor-pointer">
</form>
<a href="login.php" class="text-xl flex justify-center">Or login</a>

<?php include 'footer.php'; ?>