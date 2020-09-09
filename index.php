<?php

require_once "./Vues/header.html";
require_once "./Controlleurs/ConducteurController.php";

$conducteur = new ConducteurController();


if (isset($_GET['action'])) {
    if($_GET['action'] == 'modifierConducteur') {
        $conducteur->show($_GET['conducteurId']);
    }
} else {
    $conducteur->listConducteur();
    $conducteur->nouveauConducteur();
}

?>