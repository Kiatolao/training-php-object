<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Creneau.php';


//Ici on recupère la class creneau et on modifie une fonction tout en gardant les propriétés du code d origine
class DoubleCreneau extends Creneau {

    public function toHTML() :string
    {
        return "{$this->debut}h à {$this->fin}h \n";
    }

    //verification d'englobage du creneau (ne se chevauche pas)
    public function intersect(Creneau $creneau) : bool
    {
        return $this->inclusHeure($creneau->debut) ||
            $this->inclusHeure($creneau->fin) ||
            ($this->debut < $creneau->debut && $this->fin > $creneau->fin);
    }
//recupère le contenu d'origine, on peut aussi ajouter des fonctions
//    public function intersect(Creneau $creneau) : bool
//    {
//       parent::intersect();    
//    }
}