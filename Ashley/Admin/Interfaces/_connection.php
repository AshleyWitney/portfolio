<?php

try {
    $dbh = new PDO("mysql:dbname=demo_ynov;host=127.0.0.1", 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die;
}

?>