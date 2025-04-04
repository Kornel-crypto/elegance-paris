<?php 
session_start();
include 'config.php';

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    die("Email non valide");
}

try{
    $sql = "SELECT * FROM customers WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = true;
        if($user['account_type'] === 1){
            $_SESSION['admin'] = true;
        }
        echo $_SESSION['id'];
    }else{
        die("Mot de passe incorrect");
    }

}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    die();
}


header('Location: /elegance-paris/public/index.php');
exit;