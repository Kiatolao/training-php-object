<?php
require "../vendor/autoload.php";
require "../elements/header.php";
$uri = $_SERVER['REQUEST_URI'];
if ($uri['REQUEST_URI'] === '/nous-contacter') {
    require '../templates/contact.php';
} elseif ($uri['REQUEST_URI'] === '/') {
    require '../templates/home.php';
} else {
    http_response_code(404);
    echo "404";
}  
 require "../elements/footer.php";
?>

<!-- pour changer le dossier par defaut dans public
php -S localhost:8000 -t public
-->