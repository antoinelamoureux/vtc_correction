<?php

require_once './Models/Conducteur.php';

class ConducteurController {

    public function nouveauConducteur()
    {
        require_once './Vues/formulaire_nouveau_conducteur.html';
        if (isset($_POST['submit'])) {
            $conducteur = new Conducteur;
            $prenom = $conducteur->setPrenom($_POST['prenom']);
            $nom = $conducteur->setNom($_POST['nom']);

            $conducteur->create($prenom, $nom);
        }
}

public function listConducteur()
{
   $liste_des_conducteurs = new Conducteur();

   /* Appel de mon model pour afficher la liste des conducteurs */

   $tous_les_conducteurs = $liste_des_conducteurs->findAll('drivers');

   require_once './Vues/Conducteur/list.php';
}
}
