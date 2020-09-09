<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Modèle</th>
                <th scope="col">Couleur</th>
                <th scope="col">Immatriculation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tous_des_vehicules as $vehicule) {
                echo "<tr>";
                echo "<td>" . $vehicule->getId() . "</td>";
                echo "<td>" . $vehicule->getMarque() . "</td>";
                echo "<td>" . $vehicule->getModele() . "</td>";
                echo "<td>" . $vehicule->getCouleur() . "</td>";
                echo "<td>" . $vehicule->getImmatriculation() . "</td>";
                echo "<td><a href='?action=modifierConducteur&conducteurId=" . $vehicule->getId() . "'>
         <img src='./Ressources/icons/edit.png' width='20px' data-toggle='modal' data-target='#exampleModal'></a>
         &nbsp;&nbsp;
         <td><a href='?action=supprimerConducteur&conducteurId=" . $vehicule->getId() . "'>
         <img src='./Ressources/icons/delete.png' width='20px' data-toggle='modal' data-target='#exampleModal-". $vehicule->getId()."'></a>
         </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>