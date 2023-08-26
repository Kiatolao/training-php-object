<?php
$date ='2014-01-01';
$date2 = '2019-02-02';
//creation d'un nouvel objet 
$d = new Datetime($date);
$d2 = new DateTime($date2);
$diff = $d->diff($d2, true);
// en faisant un var_dump de $diff on a récupéré ce qui nous interessait-  days /month / year
echo "Il y a  {$diff->y} ans {$diff->m} mois et {$diff->d} de différence \n";
echo "Soit {$diff->days} jours d'écart \n";


//DateInterval
$date3 = new DateTime('2022-01-01');
$interval = new DateInterval('P1M1DT1M');
$date3->add($interval);
var_dump($date3);