<?php 
try{
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=elegance_paris', 'root', '');//peux pas expliqué
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}