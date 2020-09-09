<?php

class Model {
static public function getConnection()
 {
     try {
         $db = new PDO('mysql:host=localhost:3308;dbname=vtc', "admin", "admin");
         foreach($db->query('SELECT * from drivers') as $row) {
            print_r($row);
        }
        $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        return $db;
 }
}

?>