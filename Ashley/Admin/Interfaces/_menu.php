<?php

?>

<br>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link <?php if($page == 'acceuil') {echo 'active';}?> " href="/">Acceuil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  <?php if($page == 'creer') {echo 'active';}?> " href="/?page=creer">Accèder aux fonctionalitées</a>
  </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == 'liste')? 'active' : ''?>" href="/?page=liste">Données du formulaire</a>
    </li>
</ul>
