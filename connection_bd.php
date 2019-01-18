<?php
// Connexion à la base
try {
    $db = new PDO('mysql:host=localhost;dbname=dht11;charset=utf8','root2', 'Dta2018!!');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}
?>
