<?php

// inizio es.1

$users = [
    ['name' => 'Marco', 'surname' => 'Motolese', 'gender' => 'M'],
    ['name' => 'Carmen', 'surname' => 'De Riso', 'gender' => 'F'],
    ['name' => 'Mattia', 'surname' => 'Iacona', 'gender' => 'M'],
    ['name' => 'Sara', 'surname' => 'Peruzzini', 'gender' => 'F'],
    ['name' => 'Alberto', 'surname' => 'Cuteri', 'gender' => 'NB'],
    ['name' => 'Sara', 'surname' => 'Maraghelli', 'gender' => 'F'],

];

// print_r ($users);

foreach ($users as $user) {
    $name = $user['name'];
    $surname = $user['surname'];
    $gender = $user['gender'];

if ($gender === 'M'){
    echo "Buongiorno Sig. $name $surname \n";
    } else if ($gender === 'F') {
        echo "Buongiorno Sig.ra $name $surname \n";
    } else {
    echo "Buongiorno Signor* $name $surname \n";
}
};

var_dump ($user);

//fine es.1

//inizio es.2

$arrayNumerico = [1, 4, 3, 17, 5, 18, 7, 10, 9, 11];
$somma = 0;
$conteggio = 0;

for ($i = 0; $i < count($arrayNumerico); $i++) {
    if($arrayNumerico[$i] % 2 == 0) {
$somma += $arrayNumerico[$i];
$conteggio++;
}
}


if ($conteggio > 0) {
    $mediaNumeriPari = $somma / $conteggio;
    echo "La media dei numeri pari è: $mediaNumeriPari\n";
}

//fine es.2

//inizio es.3

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n";
    } elseif ($i % 3 == 0) {
        echo "PHP\n";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $i . "\n";
    }
}

//fine es.3

