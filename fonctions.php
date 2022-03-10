<?php

// function ma_fonction($arg1, $arg2)
// {
//     // code à exécuter
//     echo $arg1 + $arg2;
// }

// ma_fonction(2, 3, 4);


// function prix($montant, $devise = "€")
// {
//     // echo number_format($montant, 2, ',', ' ') . ' ' . $devise;
//     return number_format($montant, 2, ',', ' ') . ' ' . $devise;
// }

// function prix_ttc($ht, $tva = 20)
// {
//     $ttc = $ht * (1 + ($tva / 100));
//     return prix($ttc);
// }



// prix(12);
// prix(24, '$');

// $resultat = prix_ttc(12345, 5.5);
// var_dump($resultat);


// Typage
function typage(int $arg1, string $arg2, array $arg3)
{
    echo gettype($arg1) . '<br />';
    echo gettype($arg2) . '<br />';
    echo gettype($arg3) . '<br />';
    var_dump($arg1);
}

// typage(1, 'a', [1, 2, 3]);
// typage(1, 2, [1, 2, 3]);
// typage("1", 2, [1, 2, 3]);

$a = 10;
$b = 1;
// var_dump($a + $b);
// $b = '-123';
// $b = '-123a';
// var_dump($a + $b);

// $a = true; // 1
// $b = false; // 0
// var_dump(gettype($a + $b + $a + $a));
// var_dump($a + $b + $a + $a);

// $a = 123;
// var_dump(strval($a));
// $b = "123";
// var_dump(intval($b));
// $c = "123.45";
// var_dump(floatval($c));
// $d = 0;
// $d = 1;
// var_dump(boolval($d));

var_dump(boolval(0));
var_dump(boolval(1));
var_dump(boolval(2));
var_dump(boolval(-2));
var_dump(boolval(1.5));

var_dump(boolval([]));
var_dump(boolval([1, 2, 3]));

var_dump(boolval(''));
var_dump(boolval('abc'));

var_dump(boolval(null));

if ($resultat) {
    // int différent de 0
    // string non vide
    // tableau non vide
} else {
}
