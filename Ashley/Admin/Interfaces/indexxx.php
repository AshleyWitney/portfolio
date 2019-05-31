<?php
session_start();
require_once '_functions.php';
$page = (!isset($_GET['page']))?'acceuil':$_GET['page'];
/*
$_SESSION[guid()] = [
    'counter' => 10,
    'name' => 'concert à Ynov',
]
*/
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP Event Countert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
body {
    padding-top : 25px;
}
main {
    margin-top: 25px;
}
</style>
</head>
<body class="container" >
<nav>
<?php require_once '_menu.php' ?>
</nav>
<main>
<?php
    switch ($page) {
        case 'acceuil':
           require_once '_acceuil.php';
        break;
        case 'creer':
           require_once '_creer.php';
        break;
        case 'evenement':
           require_once '_evenement.php';
        break;
        case 'evenements':
           require_once 'evenements.php';
        break;
        case 'functions':
           require_once '_functions.php';
        break;
        case 'menu':
           require_once '_menu.php';
        break;
                      }
?>




</main>

</body>
</html>