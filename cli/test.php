<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'DoubleCreneau.php';
//appel d'une classe
$creneau= new DoubleCreneau(8, 12);
$creneau2= new DoubleCreneau(13, 18);
var_dump($creneau->inclusHeure(10));
var_dump($creneau2->inclusHeure(15));
var_dump(
    $creneau->intersect($creneau),
    $creneau2->intersect($creneau2)
);

echo $creneau->toHTML();
echo $creneau2->toHTML();

//appel d'une variable static -- ne peut utiliser this, il faudra utiliser self::$class
echo DoubleCreneau :: $static;