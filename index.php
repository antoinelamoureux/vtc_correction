<?php

require_once "./Vues/header.html";
require_once "./Controlleurs/ConducteurController.php";
require_once "./Controlleurs/VehiculeController.php";

$conducteur = new ConducteurController();
$vehicule = new VehiculeController();

if (isset($_GET['action'])) {
    
    if($_GET['action'] == 'modifierConducteur') {
        $conducteur->show($_GET['conducteurId']);
    } elseif($_GET['action'] == 'supprimerConducteur') {
        $conducteur->delete($_GET['conducteurId']);
    } elseif($_GET['action'] == 'ajoutVehicule') {
        $vehicule->listVehicule();
        $vehicule->ajout();
    
} 
}
else {
    $conducteur->listConducteur();
    $conducteur->nouveauConducteur();
}
