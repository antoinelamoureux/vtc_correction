<?php

class Model {
static public function getConnection()
 {
     try {
         $db = new PDO('mysql:host=localhost:3308;dbname=correctionvtc', "admin", "admin");

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        return $db;
 }

 public function findById($id, $table)
 {
     $bdd = $this->getConnection();
     $sql = $bdd->prepare("SELECT * FROM $table WHERE id_".$table." = ".$id);
     $sql->execute();
     $resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

     return $resultat;
 }

}

?>