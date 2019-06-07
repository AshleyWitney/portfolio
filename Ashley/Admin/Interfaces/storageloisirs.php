<?php
//creer connexion To the BD
$dsn = 'mysql:dbname=admin;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

//Preparer requete d'insertion

$sql = "INSERT INTO loisirs (loisir1, loisir2, loisir3) VALUES (?,?,?)";
$stmt = $dbh->prepare($sql);
//Executer la requete
$stmt->execute([$_GET['loisir1'], $_GET['loisir2'], $_GET['loisir3']]);


