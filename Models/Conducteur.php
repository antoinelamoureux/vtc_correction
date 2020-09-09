<?php
require_once 'Model.php';

class Conducteur extends Model
{
    private $id_conducteur;
    private $prenom;
    private $nom;

    public function getId()
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

        $requete = $bdd->prepare("INSERT INTO conducteur (nom, prenom) VALUES ('$nom', '$prenom')");
    }

    public function findAll($table)
    {
        $bdd = Model::getConnection();

        $sql = $bdd->prepare("SELECT * FROM $table");

        $sql->execute();

        $resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'conducteur');

        return $resultat;
    }

    public function update($id, $prenom, $nom)
    {
        $bdd = Model::getConnection();

        $sql = $bdd->prepare("UPDATE conducteur SET prenom='".$prenom."', nom='".$nom."' WHERE id_conducteur =".$id);
        var_dump($sql);

        $sql->execute();

        $resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'conducteur');

        return $resultat;
    }
}
