<?php

// Opérateur d'affectation

// = 

// $a = 1;

// var_dump($a);

// var_dump($b = 5);

// $c = $d = $e = 10;

// var_dump($c);

// Passage par valeur
// $var1 = 5;
// $var2 = $var1;
// $var1 = 10;
// var_dump($var2);

// echo '<hr />';

// Passage par référence
// $ref1 = 5;
// $ref2 = &$ref1;
// $ref1 = 10;
// var_dump($ref2);
// $ref2 = 3;
// var_dump($ref1);

// Opérateurs arithmétiques

// +, -, *, / 
// Inverse : $a= -$b
// $a = 1;
// $b = -$a;
// var_dump($b);

// Modulo : % (reste de la division entière)
// $a = 14;
// var_dump($a % 3);

// Puissance
// $a = 2 ** 10;
// var_dump($a);

// Opérateurs d'incrémentation et de décrémentation

// $i++; // $i = $i + 1
// $i--; // $i = $i - 1

// $i++ // post incrémentaion
// ++$i // pré incrémentation

// $i = 10;
// var_dump($i++);
// var_dump($i);

// Opérateurs combinés

// $a += 5; // $a = $a + 5; 
// $a -= 5; // $a = $a - 5; 
// $a *= 5; // $a = $a * 5; 
// $a /= 5; // $a = $a / 5; 
// $a **= 5; // $a = $a ** 5; 
// $a %= 5; // $a = $a % 5; 

// Concaténation

// $a = "texte";
// $b = " modifié";
// var_dump($a . $b);

// $a .= ' modifié';  // $a = $a . " modifié"
// var_dump($a);

// $c = "La chaîne vaut {$a}";

// $objet = "livre";

// var_dump("Des {$objet}s");

// // $c = "La chaîne vaut {$a}";
// // var_dump($d);

// Opérateurs de comparaison

// >, <, <=, >=
$a = 10;
$b = 5;

var_dump($a < $b);
var_dump($a > $b);
var_dump($a <= $b);
var_dump($a >= $b);
var_dump($a == $b);

$c = '10';
var_dump($a == $c); // Uniquement les valeurs
var_dump($a === $c); // Valeurs et types de variable

var_dump($a != $b);
var_dump($a != $c); // Uniquement les valeurs
var_dump($a !== $c); // Valeurs et types de variable

var_dump($a <=> $b); // 1 si supérieur, -1 si inférieur, 0 si égalité
var_dump($b <=> $a); // 1 si supérieur, -1 si inférieur, 0 si égalité
var_dump($a <=> $c); // 1 si supérieur, -1 si inférieur, 0 si égalité

// Opérateurs logiques

// AND (&&): ET
$a > 2 && $a < 10;
// OR (||): OU 
$a < 2 || $a > 10;
// XOR : OU exclusif
$a < 2 xor $a > 10;

// NOT (!):NON
!true; // false
!false; // true
