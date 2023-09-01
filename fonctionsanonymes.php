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

$key = "moyenne";
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
//permet d utiliser une variable exterieure a la fonction
$sort = function ($eleve1, $eleve2) use ($key) {
    return $eleve1[$key] - $eleve2[$key];
};

usort($eleves, $sort);
var_dump($eleves);