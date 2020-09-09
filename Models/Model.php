<?php

class Model {
static public function getConnection()
 {
     try {
         $db = new PDO('mysql:host=localhost:3308;dbname=vtc', "admin", "admin");

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        return $db;
 }
}

?>