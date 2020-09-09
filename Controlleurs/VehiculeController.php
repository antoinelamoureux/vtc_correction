<?php
require_once './Models/Model.php';
require_once './Models/Vehicule.php';

class VehiculeController {

    public function ajout()
    {
        require_once './Vues/formulaire_nouveau_vehicule.html';
        if (isset($_POST['submit'])) {
            $vehicule = new Vehicule;
            $marque = $vehicule->setMarque($_POST['marque']);
            $modele = $vehicule->setModele($_POST['modele']);
            $couleur = $vehicule->setCouleur($_POST['couleur']);
            $immatriculation = $vehicule->setImmatriculation($_POST['immatriculation']);

            $vehicule->ajoutVehicule($marque, $modele, $couleur, $immatriculation);
        }
}

public function listVehicule()
{
   $liste_des_vehicules = new Vehicule();

   /* Appel de mon model pour afficher la liste des conducteurs */

   $tous_des_vehicules = $liste_des_vehicules->findAll('vehicule');

   require_once './Vues/Vehicule/list.php';
}
}