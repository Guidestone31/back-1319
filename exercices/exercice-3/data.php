<?php

$clients = array(
    array("numero-client" => "CL-001", "nom" => "Durand", "prenom" => "Paul", "civilite" => "M.", "enfants" => array(), "photo" => 'paul-durand.jpg'),
    array("numero-client" => "CL-002", "prenom" => "Jean-Jacques", "civilite" => "M.", "nom" => 'Dupont D\'Issigny', "enfants" => array('Riri', 'Fifi', 'Loulou'), "photo" => 'jean-jacques-dupont.jpg'),
    array("numero-client" => "CL-003", "nom" => "Duchemin", "prenom" => "Carole", "civilite" => "Mme", "enfants" => array('Jeanne', 'Michèle'), "photo" => 'carole-duchemin.jpg'),
);

$civilites = array(
    'M.'    => 'Monsieur',
    'Mme'   => 'Madame',
    'Mlle'  =>  'Mademoiselle',
);

$commandes = array(
    array("numero-cde" => "CDE-001", "numero-client" => "CL-001", "quantite" => 3, "total" => 200),
    array("numero-cde" => "CDE-002", "numero-client" => "CL-002", "quantite" => 4, "total" => 250),
    array("numero-cde" => "CDE-003", "numero-client" => "CL-003", "quantite" => 5, "total" => 60),
    array("numero-cde" => "CDE-004", "numero-client" => "CL-002", "quantite" => 6, "total" => 1200),
    array("numero-cde" => "CDE-005", "numero-client" => "CL-003", "quantite" => 7, "total" => 500),
    array("numero-cde" => "CDE-006", "numero-client" => "CL-003", "quantite" => 8, "total" => 160),
);
