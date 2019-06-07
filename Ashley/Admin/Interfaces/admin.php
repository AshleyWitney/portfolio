<?php

require_once '_authentification.php';
?>

<?php

require_once '_connection.php';

?>

<h1>Welcome Admin !</h1>

<h1>Mes maisons</h1>

<?php
    if (isset($_POST['creer'])) {
        $stmt = $dbh->prepare('
                INSERT INTO plante (name, city)
                VALUES (:name, :city)
            ');
        $stmt->bindValue('name', $_POST['name']);
        $stmt->bindValue('city', $_POST['city']);
        $stmt->execute();
        echo "Maison créée !";
    }

    if (isset($_GET['delete'])) {
        $stmt = $dbh->prepare('
            DELETE FROM plante
            WHERE id = :id
        ');
        $stmt->bindValue('id', $_GET['delete']);
        $stmt->execute();
    }
?>


<?php
    if (isset($_GET['update'])):
        if (isset($_POST['envoyer'])) {
            $stmt = $dbh->prepare('
                UPDATE plante 
                SET name = :name, city = :city
                WHERE id = :id
            ');
            $stmt->bindValue('name', $_POST['name']);
            $stmt->bindValue('city', $_POST['city']);
            $stmt->bindValue('id', $_GET['update']);
            $stmt->execute();
            echo "Votre maison a été mise à jour !";
        }


        $stmt = $dbh->prepare('SELECT * FROM plante WHERE id = :id');
        $stmt->bindValue('id', $_GET['update']);
        $stmt->execute();

        $plante = $stmt->fetch(PDO::FETCH_ASSOC);
?>
        <form action="" method="post">
            <input type="text" name="name" value="<?= $plante['name']; ?>">
            <input type="text" name="city" value="<?= $plante['city']; ?>">
            <input type="submit" name="envoyer" value="Mettre à jour">
        </form>
<?php
    endif;
?>

<ol>
    <?php
    $stmt = $dbh->query('SELECT * FROM plante');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
        <li>
            <a href="/admin.php?update=<?= $row['id'];?>">
                <?= $row['name']; ?> (<?= $row['city']; ?>)
            </a> -
            <a
                href="/admin.php?delete=<?= $row['id'];?>"
                onclick="return window.confirm('Vous confirmez ?')"
            >Supprimer</a>
        </li>
    <?php
    endwhile;
    ?>
</ol>


<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="city">
    <input type="submit" name="creer" value="creer">
</form>