<?php

// definir des horaire en parametre et verfifier si un creneau est true/false pour les heures d ouverture
class Creneau {
    
    public static $static ='static-test';

    public $debut;

    public $fin;

    public function __construct(int $debut, int $fin)
    {
        $this->debut = $debut;
        $this->fin = $fin;
    }

    public function toHTML() :string
    {
        return "<strong>{$this->debut}h</strong> à <strong>{$this->fin}h</strong> \n";
    }

    public function inclusHeure(int $heure) : bool
    {
        return $heure >= $this->debut && $heure <=$this->fin;
    }

//verification d'englobage du creneau (ne se chevauche pas)
    public function intersect(Creneau $creneau) : bool
    {
        return $this->inclusHeure($creneau->debut) ||
            $this->inclusHeure($creneau->fin) ||
            ($this->debut < $creneau->debut && $this->fin > $creneau->fin);
    }
}