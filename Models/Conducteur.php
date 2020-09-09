<?php
require_once 'Model.php';

class Conducteur extends Model {
    private $id_conducteur;
    private $prenom;
    private $nom;

    public function getIdConducteur()
    {
        return $this->id_conducteur;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        return $this->prenom = $prenom;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
       return $this->nom = $nom;
    }

    public function create($prenom, $nom)
    {
        
        $bdd = Model::getConnection();

        $requete = $bdd->prepare("INSERT INTO drivers (nom, prenom) VALUES ('$nom', '$prenom')");
        var_dump($requete);
        die;
    }

}
