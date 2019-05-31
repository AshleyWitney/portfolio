<?php

require_once '_authentification.php';
?>

<?php

require_once '_connection.php';

?>

<h1>Welcome Admin !</h1>

<h1>Mes commentaires</h1>

<?php
    if (isset($_POST['creer'])) {
        $stmt = $dbh->prepare('
                INSERT INTO comment (content)
                VALUES (:content)
            ');
        $stmt->bindValue('content', $_POST['content']);
        $stmt->execute();
        echo "Commentaire créée !";
    }

    if (isset($_GET['delete'])) {
        $stmt = $dbh->prepare('
            DELETE FROM comment
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
                UPDATE comment 
                SET content = :content
                WHERE id = :id
            ');
            $stmt->bindValue('content', $_POST['content']);
            $stmt->bindValue('id', $_GET['update']);
            $stmt->execute();
            echo "Votre commentaire a été mise à jour !";
        }


        $stmt = $dbh->prepare('SELECT * FROM comment WHERE id = :id');
        $stmt->bindValue('id', $_GET['update']);
        $stmt->execute();

        $comment = $stmt->fetch(PDO::FETCH_ASSOC);
?>
        <form action="" method="post">
            <input type="text" name="content" value="<?= $comment['content']; ?>">
            <input type="submit" name="envoyer" value="Mettre à jour">
        </form>
<?php
    endif;
?>

<ol>
    <?php
    $stmt = $dbh->query('SELECT * FROM comment');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
        <li>
            <a href="/admin_content.php?update=<?= $row['id'];?>">
                <?= $row['content']; ?>
            </a> -
            <a
                href="/admin_content.php?delete=<?= $row['id'];?>"
                onclick="return window.confirm('Vous confirmez ?')"
            >Supprimer</a>
        </li>
    <?php
    endwhile;
    ?>
</ol>


<form action="" method="post">
    <input type="text" name="content">
    <input type="submit" name="creer" value="creer">
</form>