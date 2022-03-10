<?php

function total_commandes(string $numero_client): int
{
    global $commandes;
    $total = 0;
    foreach ($commandes as $commande) {
        if ($commande['numero-client'] == $numero_client) {
            $total += $commande['total'];
        }
    }
    return intval($total);
}


function panier_moyen(string $numero_client): int
{
    global $commandes;
    $nb_commandes = 0;
    $total = 0;
    foreach ($commandes as $commande) {
        if ($commande['numero-client'] == $numero_client) {
            $nb_commandes++;
            $total += $commande['total'];
        }
    }
    // return intval(total_commandes($numero_client) / $nb_commandes);
    return intval($total / $nb_commandes);
}

function commandes_client(string $numero_client, string $action = "total"): int
{
    global $commandes;
    $nb_commandes = 0;
    $total = 0;
    foreach ($commandes as $commande) {
        if ($commande['numero-client'] == $numero_client) {
            $nb_commandes++;
            $total += $commande['total'];
        }
    }

    if ($action == "total") {
        return intval($total);
    } else {
        return intval($total / $nb_commandes);
    }
}
