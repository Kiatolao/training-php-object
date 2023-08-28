<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Creneau.php';


//Ici on recupère la class creneau et on modifie une fonction tout en gardant les propriétés du code d origine
class DoubleCreneau extends Creneau {

    public function toHTML() :string
    {
        return "{$this->debut}h à {$this->fin}h \n";
    }
}