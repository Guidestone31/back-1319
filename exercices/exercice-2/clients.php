<?php
$clients = array(
    array("nom" => "Durand", "prenom" => "Paul", "civilite" => "M.", "enfants" => array(), "photo" => 'paul-durand.jpg'),
    array("prenom" => "Jean-Jacques", "civilite" => "M.", "nom" => 'Dupont D\'Issigny', "enfants" => array('Riri', 'Fifi', 'Loulou'), "photo" => 'jean-jacques-dupont.jpg'),
    array("nom" => "Duchemin", "prenom" => "Carole", "civilite" => "Mme", "enfants" => array('Jeanne', 'Michèle'), "photo" => 'carole-duchemin.jpg'),
);

// $civilites = array(
//     'M.'    => 'Monsieur',
//     'Mme'   => 'Madame',
//     'Mlle'  =>  'Mademoiselle',
// );

$nb_clients = count($clients);
$pluriel = ($nb_clients > 1) ? 's' : '';

// switch ($nb_clients) {
//     case 0:
//         $titre = "Aucun client trouvé";
//         break;
//     case 1:
//         $titre = "1 clien trouvé";
//         break;
//     default:
//         $titre = $nb_clients . " clients trouvés";
// }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>

<body>

    <?php if ($nb_clients > 0) { ?>

        <!-- <h1><?= $nb_clients; ?> client<?= ($nb_clients > 1) ? 's' : ''; ?> trouvé<?= ($nb_clients > 1) ? 's' : ''; ?></h1> -->
        <h1><?= $nb_clients; ?> client<?= $pluriel; ?> trouvé<?= $pluriel; ?></h1>
        <!-- <h1><?= $titre; ?></h1> -->

        <?php foreach ($clients as $client) { ?>
            <div>
                <?php
                switch ($client['civilite']) {
                    case 'M.':
                        $civilite = 'Monsieur';
                        break;
                    case 'Mme':
                        $civilite = 'Madame';
                        break;
                    default:
                        $civilite = 'Mademoiselle';
                }
                ?>
                <h2><?= $civilite . ' ' . $client['prenom'] . ' ' . $client['nom']; ?></h2>
                <!-- <h2><?= $civilites[$client['civilite']] . ' ' . $client['prenom'] . ' ' . $client['nom']; ?></h2> -->
                <?php if (!empty($client['enfants'])) { ?>
                    <ul>
                        <?php foreach ($client['enfants'] as $prenom) { ?>
                            <li><?= $prenom; ?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <img src="../exercice-1/<?= $client['photo']; ?>" alt="">
            </div>
        <?php } ?>

    <?php } else { ?>
        <h1>Aucun client trouvé</h1>
    <?php } ?>

</body>

</html>