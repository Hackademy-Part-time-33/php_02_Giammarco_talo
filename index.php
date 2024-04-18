<?php

//~ Traccia 1:
//~ Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

$people = [
    ['name' => 'Riccardo', 'surname' => 'Leone', 'genre' => 'm'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'genre' => 'f'],
    ['name' => 'Giuseppe', 'surname' => 'Monaco', 'genre' => 'm'],
    ['name' => 'Giada', 'surname' => 'Verdi', 'genre' => 'f'],
    ['name' => 'Anna', 'surname' => 'Bianchi', 'genre' => 'nb'],
];

foreach ($people as $person) {
    if ($person['genre'] == 'm') {
        echo "Buongiorno Sig. " . $person['name'] . " " . $person['surname'] . "\n";
    }
    elseif ($person['genre'] == 'f') {
        echo "Buongiorno Sig.ra " . $person['name'] . " " . $person['surname'] . "\n";
    }
    else {
        echo "Buongiorno " . $person['name'] . " " . $person['surname'] . "\n";
    }
}


?>