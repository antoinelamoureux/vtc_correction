<?php
require_once 'Model.php';

class Vehicule extends Model {
    private $id;
    private $marque;
    private $modele;
    private $couleur;
    private $immatriculation;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of immatriculation
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @return  self
     */ 
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function ajoutVehicule($marque, $modele, $couleur, $immatriculation)
    {
        $bdd = Model::getConnection();

        $sql = $bdd->prepare("INSERT INTO vehicule (marque, modele, couleur, immatriculation) 
        VALUES ('$marque', '$modele', '$couleur', '$immatriculation')");

        $sql->execute();

        $resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'vehicule');

        header('Location: ./index.php');  
    }

    public function findAll($table)
    {
        $bdd = Model::getConnection();

        $sql = $bdd->prepare("SELECT * FROM $table");

        $sql->execute();

        $resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

        return $resultat;
    }
}