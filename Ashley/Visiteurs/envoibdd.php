<?php
//creer connexion To the BD
$dsn = 'mysql:dbname=formulaire;host=127.0.0.1';
$user = 'root';
$password = '';

try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connexion échouée : ' . $e->getMessage();
}

//Preparer requete d'insertion

$sql = "INSERT INTO contact (Nom, email, Prenom, message) VALUES (?,?,?,?)";
$stmt = $dbh->prepare($sql);
//Executer la requete
$stmt->execute([$_GET['Nom'], $_GET['email'], $_GET['Prenom'], $_GET['message']]);

/*} else {
$sth = $dbh->prepare("
SELECT id, nom
FROM contact
WHERE nom = :nom
");

$sth->bindValue('nom', $_GET['nom']); */