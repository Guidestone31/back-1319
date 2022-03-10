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

// var_dump(boolval(0));
// var_dump(boolval(1));
// var_dump(boolval(2));
// var_dump(boolval(-2));
// var_dump(boolval(1.5));

// var_dump(boolval([]));
// var_dump(boolval([1, 2, 3]));

// var_dump(boolval(''));
// var_dump(boolval('abc'));

// var_dump(boolval(null));

// if ($resultat) {
//     // int différent de 0
//     // string non vide
//     // tableau non vide
// } else {
// }

// $a = 1;
// settype($a, 'string');
// var_dump($a);

// $a = (int) 123.45;
// var_dump($a);
// (int), (integer)
// (bool), (boolean)
// (float), (double), (real)
// (string)
// (array)

// $tab = (array) $a;
// var_dump($tab);
// $a = (string) $a;
// $a = "abc";
// var_dump($a);

function non_nullable(?int $arg)
// function non_nullable(int $arg = null)
{
    var_dump($arg);
}

// non_nullable(12);
// non_nullable(null);

function retour(): array
{
    $a = array();
    return $a;
}

// var_dump(retour());

$a = 10;
$b = 20;

function portee1($arg1, $arg2)
{
    // $c = 50;
    global $a, $b;
    // $a++;
    return $a + $b;
    // return $arg1 + $arg2;
}

// var_dump(portee1($a, $b));
// var_dump($a);
// var_dump($c);

function moyenne($arg1, $arg2, $arg3)
{
    return ($arg1 + $arg2 + $arg3) / 3;
}

// var_dump(moyenne(5, 10, 15));


function moyenne2(...$arg)
{
    $total = 0;
    $compteur = 0;
    foreach ($arg as $nombre) {
        $total += $nombre;
        $compteur++;
    }
    return $total / $compteur;
}

// var_dump(moyenne2(1, 2, 3, 4, 5, 6, 7));
// var_dump(moyenne2(1, 2, 3, 4));


function moyenne3(): void // void: cette fonction ne retourne rien
{
    var_dump(func_num_args()); // nombre de paramètres passés
    var_dump(func_get_args()); // tableau des paramètres passés
    // var_dump(func_get_arg()); // valeur d'un paramètre passé
}

var_dump(moyenne3(1, 2, 3, 4, 5, 6, 7));
var_dump(moyenne3(1, 2, 3, 4));
