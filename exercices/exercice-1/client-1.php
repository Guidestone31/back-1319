<?php
$clients = array(
    array("nom" => "Durand", "prenom" => "Paul", "civilite" => "M.", "enfants" => array(), "photo" => 'paul-durand.jpg'),
    array("nom" => 'Dupont D\'Issigny', "prenom" => "Jean-Jacques", "civilite" => "M.", "enfants" => array('Riri', 'Fifi', 'Loulou'), "photo" => 'jean-jacques-dupont.jpg'),
    array("nom" => "Duchemin", "prenom" => "Carole", "civilite" => "Mme", "enfants" => array('Jeanne', 'Michèle'), "photo" => 'carole-duchemin.jpg'),
);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $clients[1]['nom']; ?> <?= $clients[1]['prenom']; ?> </title>
</head>

<body>

    <h1><?= $clients[1]['civilite']; ?> <?= $clients[1]['prenom']; ?> <?= $clients[1]['nom']; ?></h1>
    <ul>
        <li><?= $clients[1]['enfants'][0]; ?></li>
        <li><?= $clients[1]['enfants'][1]; ?></li>
        <li><?= $clients[1]['enfants'][2]; ?></li>
    </ul>
    <img src="./<?= $clients[1]['photo']; ?>" alt="">

</body>

</html>