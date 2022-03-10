<?php
require_once '../exercice-2/data.php';
$titre = $clients[1]['nom'] . ' ' . $clients[1]['prenom'];
require_once '../exercice-2/header.php';
?>

<h1><?= $clients[1]['civilite']; ?> <?= $clients[1]['prenom']; ?> <?= $clients[1]['nom']; ?></h1>
<ul>
    <li><?= $clients[1]['enfants'][0]; ?></li>
    <li><?= $clients[1]['enfants'][1]; ?></li>
    <li><?= $clients[1]['enfants'][2]; ?></li>
</ul>
<img src="./<?= $clients[1]['photo']; ?>" alt="">

<?php require_once '../exercice-2/footer.php'; ?>