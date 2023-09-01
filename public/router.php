<?php
require "../vendor/autoload.php";

$uri = $_SERVER['REQUEST_URI'];
// altorouter extension doit être instancié
$router = new AltoRouter();
$router->map('GET', '/', function () {
    echo "Home";}
);
$router->map('GET', '/nous-contacter', function () {
    echo "Nous contacter";}
);
$router->map('GET', '/blog/[*:slug]-[i:id]', function ($slug, $id) {
    echo "Je suis l'article $slug et mon id est $id";}
);
$match = $router->match();
if ($match !== false) {
    require "../elements/header.php";
    call_user_func_array($match['target'], $match['params']);
    require "../elements/footer.php";
};
 
?>

<!-- pour changer le dossier par defaut dans public
php -S localhost:8000 -t public
-->