<?php
$date ='2019-01-01';
$date2 = '2019-02-02';
//creation d'un nouvel objet 
$d = new Datetime($date);
$d2 = new DateTime($date2);
$diff = $d->diff($d2, true);

echo "Il y a {$diff->days} jours d'écart";
