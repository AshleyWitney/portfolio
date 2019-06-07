
<h3>Mes plantes</h3>

<div class="list-group">
    <?php
    foreach ($_SESSION as $key => $evenement):
        ?>

        <a href="/?page=evenement&key=<?= $key; ?>" class="list-group-item list-group-item-action">
            <?= $evenement['nom']; ?> (<?= $evenement['compteur']; ?> plante(s))
        </a>

    <?php
    endforeach;
    ?>
</div>