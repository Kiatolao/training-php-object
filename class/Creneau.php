<?php

// definir des horaire en parametre et verfifier si un creneau est true/false pour les heures d ouverture
class Creneau {
    
    public $debut;

    public $fin;

    public function __construct(int $debut, int $fin)
    {
        $this->debut = $debut;
        $this->fin = $fin;
    }

    public function inclusHeure(int $heure)
    {
        return $heure >= $this->debut && $heure <=$this->fin;
    }
}