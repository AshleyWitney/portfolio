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

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Mon site</title>
</head>
<body>
<h1> Données formulaire</h1> <br>
<table class="table table-bordered">
    <thead>
    <tr style="background-color: #006699">
        <th scope="col">Noms</th>
        <th scope="col">Prénoms</th>
        <th scope="col">Email</th>
        <th scope="col">Messages</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        $stmt = $dbh->query('SELECT * FROM contact');
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
        <th scope="row"> <?= $row['nom']; ?> </th>
        <td><?= $row['prenom']; ?></td>
        <td> <?= $row['email']; ?> </td>
        <td> <?= $row['message']; ?> </td>
    </tr>

    <?php
    endwhile;
    ?>
    </tbody>
</table>


</body>
</html>
