<?php

//~ Traccia 1:
//~ Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

// $people = [
//     ['name' => 'Riccardo', 'surname' => 'Leone', 'genre' => 'm'],
//     ['name' => 'Maria', 'surname' => 'Rossi', 'genre' => 'f'],
//     ['name' => 'Giuseppe', 'surname' => 'Monaco', 'genre' => 'm'],
//     ['name' => 'Giada', 'surname' => 'Verdi', 'genre' => 'f'],
//     ['name' => 'Anna', 'surname' => 'Bianchi', 'genre' => 'nb'],
// ];

// foreach ($people as $person) {
//     if ($person['genre'] == 'm') {
//         echo "Buongiorno Sig. " . $person['name'] . " " . $person['surname'] . "\n";
//     }
//     elseif ($person['genre'] == 'f') {
//         echo "Buongiorno Sig.ra " . $person['name'] . " " . $person['surname'] . "\n";
//     }
//     else {
//         echo "Buongiorno " . $person['name'] . " " . $person['surname'] . "\n";
//     }
// }





//~ Traccia 2:
//~ Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.


// $even = 0;
// $sum = 0;
// $numbers = [12, 11, 42, 64, 26, 3, 40, 7];
// foreach ($numbers as $number) {
//     if ($number % 2 == 0) {
//     $even++;
//     $sum += $number;
//     }
// }
// echo($sum / $even);




//~ Traccia 3:
//~ Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

for ($i=1; $i <= 100; $i++) { 
    if ($i % 15 == 0) {
        echo('HACKADEMY' . "\n");
    }
    else if ($i % 5 == 0) {
        echo('JAVASCRIPT ' . "\n");
    }
    else if ($i % 3 == 0) {
        echo('PHP' . "\n") ;
    }
    else {
        echo ($i . "\n");
    }
}

?>