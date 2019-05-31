<?php

session_start();
require_once '_functions.php';

if(isset($_GET['page'])) {
    $page = $_GET['page'];
}else {
    $page = 'acceuil';

}
if (isset($_POST['nom']) && $_POST['nom'] != '' && isset($_POST['date']) && $_POST['date'] !='' ) {
    echo "Enregistrement de ".$_POST['nom'];
    $evenement = [
        'nom' => $_POST['nom'],
        'date' => $_POST['date'],
        'compteur' => 0
    ];
    $_SESSION[guid()] = $evenement;
    header('Location: /?page=evenements');
    die;
}

if ($page == 'evenement' && isset($_GET['key']) && isset($_GET['action'])) {
    //On recupère a clé de l'évènement à afficher
$key = $_GET['key'];
//On récupère l'évènement en session
$evenement = &$_SESSION[$key];
//Puis pour finir on rcupère son nom
$nom = $evenement['nom'];
$compteur = &$evenement['compteur'];

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'entre') {
        $compteur++;
    } elseif ($_GET['action'] == 'sort') {
        $compteur--;
    }elseif ($_GET['action']=='supprimer'){
        unset($_SESSION[$key]);
        header();
    }
    header('Location: /?page=evenement&key='.$_GET['key']);
    die;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br>
<?php
require_once '_menu.php';
?>

<?php

switch ($page) {
    case 'acceuil':
       require_once '_acceuil.php';
    break;
    case 'creer':
    require_once '_creer.php';
    break;
    case 'evenements':
    require_once '_evenements.php';
    break;
    case 'evenement':
    require_once '_evenement.php';
    break;
    case 'liste':
        require_once '_liste.php';
        break;
}

?>

</body>
</html>