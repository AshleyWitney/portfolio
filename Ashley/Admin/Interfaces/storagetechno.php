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

$sql = "INSERT INTO techno (techno1, techno2, techno3) VALUES (?,?,?)";
$stmt = $dbh->prepare($sql);
//Executer la requete
$stmt->execute([$_GET['techno1'], $_GET['techno2'], $_GET['techno3']]);


