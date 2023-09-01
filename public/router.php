<?php
require "../vendor/autoload.php";
require "../elements/header.php";
$uri = $_SERVER['REQUEST_URI'];
// altorouter extension doit être instancié
$router = new AltoRouter();
$router->map('GET', '/', function () {
    echo "Home";}
);
$router->map('GET', '/nous-contacter', function () {
    echo "Nous contacter";}
);
 require "../elements/footer.php";
?>

<!-- pour changer le dossier par defaut dans public
php -S localhost:8000 -t public
-->