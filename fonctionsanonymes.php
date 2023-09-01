<?php

$maFonction = function($name){
    return "Hello $name";
};

var_dump($maFonction("John Doe"));

//creer un tableau avec le nom de l eleve, son age et sa moyenne
//afficher le tableau
//afficher le nom de l eleve
//afficher l age de l eleve
//afficher la moyenne de l eleve

$eleves = [
    [
        "nom" => "John Doe",
        "age" => 18,
        "moyenne" => 15
    ],
    [
        "nom" => "Jane Doe",
        "age" => 17,
        "moyenne" => 16
    ],
    [
        "nom" => "Jean Dupont",
        "age" => 19,
        "moyenne" => 14
    ]
];

$sortMoyenne = function ($eleve1, $eleve2) {
    return $eleve1["moyenne"] - $eleve2["moyenne"];
};

usort($eleves, $sortMoyenne);
var_dump($eleves);