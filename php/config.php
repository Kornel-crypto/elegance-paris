<?php 
try{
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=elegance_paris', 'root', '');
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}