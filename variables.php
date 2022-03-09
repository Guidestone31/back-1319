<?php

$_MaVariable1 = 0;

// Conventions de nommage

// Snake Case (Underscore Case) : $ma_premiere_variable (PHP historique)
// Camel Case : $maPremiereVariable (javascript, java, objet)
// Pascal Case : $MaPremiereVariable (PHP : nom de classes)
// Screaming Snake Case : MA_PREMIERE_CONSTANTE (PHP : constantes) 

// Kebab Case (Spinal Case) : ma-premiere-variable (URL, nom de fichier, HTML/CSS : id & classes)

// echo $_MaVariable1;

// Variables dynamiques (variables variables)

$cd = "15€";
$dvd = 20;

$produit = "cd";

echo $$produit;

// echo gettype($$produit);

// Constantes

echo '<hr/>';

const NOM = "PHP";

define('VERSION', 8); // const VERSION = 8

echo NOM;
echo VERSION;

define('BASE_URL', 'http://monsite.fr');
define('PLUGIN_DIR', '');
define('PLUGIN_URL', '');
echo '<hr/>';

define('MON_TABLEAU', array('a', 'b', 'c'));

echo MON_TABLEAU[1];

// MON_TABLEAU[1] = 'd';

// Types de données
// - entiers (int, integer)
// - nombre avec partie décimals (float, double, real)
// - chaînes de caractères (string)
// - booléens (bool, boolean)
echo '<hr/>';
echo gettype(true);
echo gettype(false);
echo '<br/>';
echo gettype("true");
echo gettype('false');
echo '<br/>';
echo gettype(1);
echo gettype("1");
echo '<br/>';
echo gettype(10.23456789);
echo gettype(5e7);
echo 5e7;  // 5 * 10 puissance 7
echo gettype(1.00000000);
echo '<br/>';
echo gettype("texte");
echo '<br/>';
echo gettype('15€');
echo '<br/>';

// la variable a une valeur nulle -> 0 
// la variable a la valeur null -> null

echo '<hr/>';
echo 45;
echo '<hr/>';
echo 045;
echo '<hr/>';
echo 0x45;

echo '<hr/>';
$objet = "livre";
echo "Le $objet est neuf";
echo '<br/>';
echo 'Le $objet est neuf';
echo '<br/>';
echo "Ce livre m'appartient";
echo '<br/>';
echo 'Le livre annonce : "Le début"';
echo '<br/>';
echo "Le livre annonce : \"C'est le début\"";
echo '<br/>';
echo 'Le livre annonce : "C\'est le début"';
echo '<br/>';
echo 'Affiche le caractère \\';


echo '<hr/>';

// Tableaux (array)
// - indexés numériquement
// - associatifs

// array() ou []
$tableau1 = array('a', 'b', 'c');
var_dump($tableau1);
$tableau2 = array(5 => 'a', 'b', 2 => 'c');
var_dump($tableau2);


$tableau3 = array("5" => "tel0", "nom" => "Dupond", "prenom" => "Jean", "age" => 32, "tel1", "tel2");
var_dump($tableau3);

$matrice = array(
    array(1, 2, 3),
    array(4, 5, 'toto'),
    array(7, 8, 9)
);
var_dump($matrice);
echo $matrice[1][1];
echo $matrice[1][2];


// $employes = array(
//     array("nom"=>"", "prenom"=>"", "age"=>25, "adresse"=>array()),
//     array(),
//     array(),
// );


// Fonctions de vérification
/*
is_bool($a);
is_int($a); // is_integer(), is_long()
is_double($a); // is_float(), is_real()
is_string($a);
is_array($a);
is_scalar($a); // entier, double, booléen, is_string
is_numeric($a); // is_int(), is_double()
*/
$a = 0;
var_dump(isset($a)); // true si la variable est déclarée
var_dump(empty($a)); // true si la variable est vide (0, chaîne vide)
var_dump(is_null($a)); // true si la variable est à null (pas de valeur)