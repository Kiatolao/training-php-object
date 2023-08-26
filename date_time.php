<?php

//creation d'un nouvel objet || $x-> declare une methode (modify(), format()...)
$date = new Datetime();
$date->modify('+1month');
echo $date-> format('d/m/Y');
var_dump($date);