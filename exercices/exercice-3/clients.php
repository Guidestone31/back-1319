<?php

require_once './data.php';
require_once './fonctions.php';

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

$titre = 'Clients';

require_once './header.php';

?>


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
            <!-- <p>Total des commandes : <?= total_commandes($client['numero-client']); ?> €</p>
            <p>Panier moyen : <?= panier_moyen($client['numero-client']); ?> €</p> -->

            <p>Total des commandes : <?= commandes_client($client['numero-client']); ?> €</p>
            <p>Panier moyen : <?= commandes_client($client['numero-client'], 'panier-moyen'); ?> €</p>


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

<?php require_once './footer.php'; ?>