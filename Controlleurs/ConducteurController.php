<?php

require_once './Models/Conducteur.php';
require_once './Models/Model.php';

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

   $tous_les_conducteurs = $liste_des_conducteurs->findAll('conducteur');

   require_once './Vues/Conducteur/list.php';
}

public function show($id)
{
    $conducteur = new Conducteur();
    $model = new Model();

    $conducteurById = $model->findById($id, 'conducteur');

    require_once './Vues/Conducteur/edit.php';

    if(isset($_POST['submit'])) {;
        foreach ($conducteurById as $value) {
            $prenom = $conducteur->setPrenom($_POST['prenom']);
            $nom = $conducteur->setNom($_POST['nom']);
            var_dump($prenom, $nom);
    
            $value->update($id, $nom, $prenom);
        }
        }
}

public function delete($id)
{
    $conducteur = new Conducteur();
    return $conducteur->deleteById($id, 'conducteur');
}
}
