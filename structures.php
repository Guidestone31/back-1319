<?php
// Structures de contrôle

// Structures conditionnelles

// $a = 5;
// $b = 5;

// // if
// if ($a > $b) {
//     echo '$a est plus grand que $b';
// }
// echo '<hr />';

// // if ... else
// if ($a > $b) {
//     echo '$a est plus grand que $b';
// } else {
//     echo '$a est inférieur ou égal à $b';
// }

// echo '<hr />';

// // if ... elseif ... else
// if ($a > $b) {
//     echo '$a est plus grand que $b';
// } elseif ($a < $b) {
//     echo '$a est inférieur ou égal à $b';
// } else {
//     echo '$a est égal à $b';
// }

// echo '<hr />';

// $nombre = 10;

// if ($nombre > 1) {
//     echo 'Livres';
// } else {
//     echo 'Livre';
// }

// echo '<hr />';

// echo 'Livre' . ($nombre > 1 ? 's' : '');

// ?? Coalescence nulle
// $test = 0;
// var_dump(empty($test) ? 'aucun' : $test);
// var_dump($test ?? 'aucun'); 


// switch

$a = 1;

// switch ($a) {
//     case 1:
//         echo '$a vaut 1';
//         break;
//     case 2:
//         echo '$a vaut 2';
//         break;
//     case 3:
//         echo '$a vaut 3';
//         break;
//     default:
//         echo '$a est supérieur à 3';
// }


// $b = 0;

// switch ($a <=> $b) {
//     case -1:
//         echo 'inférieur';
//         break;
//     case 0:
//         echo 'égal';
//         break;
//     case 1:
//         echo 'supérieur';
//         break;
// }


// Structures répétitives

// for
// foreach
// while & do while

// For
// $tableau = [
//     'dernier' => 'a', 5 => 'b', 'c'
// ];

// $tableau['premier'] = 'd';
// $tableau[] = 'e';
// unset($tableau['dernier']);
// unset($tableau['premier']);



// var_dump($tableau);

// for ($i = 0; $i < count($tableau); $i++) {
//     var_dump($tableau[$i]);
// }

// Foreach : valeurs
// foreach ($tableau as $ligne) {
//     var_dump($ligne);
// }

// foreach ($tableau as $key => $ligne) {
//     var_dump($key . ' : ' . $ligne);
// }

// while

// $i = 1;

// while ($i < 5) {
//     //
//     $i++;
// }

// do ... while

// do {
//     $i++;
// } while ($i < 5);


// break : sortir d'une structure de contrôle
// if (expression) {
//     if (expression) {
//         // code
//         if (expression) {
//             break (3);
//         }
//         // code
//     }
// }

// continue

// for ($i = 1; $i < 100; $i++) {
//     //
//     if ($i == 3 || $i == 5) {
//         continue;
//     }

//     if ($i == 15) {
//         break;
//     }

//     echo $i . '<br/>';
// }


for ($i = 1; $i < 5; $i++) {
    echo 'i : ' . $i;
    for ($j = 1; $j < 5; $j++) {
        echo 'j : ' . $j;
    }
    echo '<br>';
}
