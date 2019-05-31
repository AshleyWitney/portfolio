<div class="jumbotron">
  <h1 class="display-4">Hello,bienvenue sur ta page d'administration Ashley!</h1>
  <p class="lead">Bonne continuation!</p>
  <hr class="my-4">

    <?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Bye bye";
    exit;
}

if (
    $_SERVER['PHP_AUTH_USER'] != 'admin' ||
    $_SERVER['PHP_AUTH_PW'] != '123456'
) {
    echo "On se connait pas !";
    die;
}
?>

</div>