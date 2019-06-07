<?php
//On recupère a clé de l'évènement à afficher
$key = $_GET['key'];
//On récupère l'évènement en session
$evenement = &$_SESSION[$key];
//Puis pour finir on rcupère son nom
$nom = $evenement['nom'];
$compteur = &$evenement['compteur'];


?>
<div class="card">
  <h5 class="card-header"><?= $nom; ?></h5>
  <div class="card-body">
    <h5 class="card-title">Il y a <?= $compteur; ?> plante(s) de ce genre.</h5>
    <?php
    $today = new DateTime();

    ?>
    <a 
    href="/?page=evenement&key=<?= $key; ?>&action=entre" 
    class="btn btn-success">
    Une comme ça de plus !
    </a>
    <a href="/?page=evenement&key=<?= $key; ?>&action=sort" 
    class="btn btn-warning"
    >
    Une de moins !
    </a><br><br>

    <a href="/?page=evenement&key=<?= $key; ?>&action=supprimer" 
    class="btn btn-danger"
    >
    Supprimer cette plante.
    </a>

  </div>
</div>