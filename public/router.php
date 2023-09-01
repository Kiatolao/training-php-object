<?php
require "../vendor/autoload.php";
require "../elements/header.php";
$page = $_GET["page"] ?? "404";
 if ($page === 'pdo') {
    require "../pages/pdo.php";
 } else if ($page === '404') {
    require "../pages/404.php";
 }
 require "../elements/footer.php";
?>

<h1>Bienvenue</h1>



<!-- pour changer le dossier par defaut dans public
php -S localhost:8000 -t public
-->