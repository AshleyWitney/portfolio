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

$sql = "INSERT INTO projet (projet1, projet2, projet3) VALUES (?,?,?)";
$stmt = $dbh->prepare($sql);
//Executer la requete
$stmt->execute([$_GET['projet1'], $_GET['projet2'], $_GET['projet3']]);


