<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tous_les_conducteurs as $conducteur) {
                echo "<tr>";
                echo "<td>" . $conducteur->getId() . "</td>";
                echo "<td>" . $conducteur->getPrenom() . "</td>";
                echo "<td>" . $conducteur->getNom() . "</td>";
                echo "<td><a href='?action=modifierConducteur&conducteurId=" . $conducteur->getId() . "'>
         <img src='./Ressources/icons/edit.png' width='20px' data-toggle='modal' data-target='#exampleModal'></a>
         &nbsp;&nbsp;
         <td><a href='?action=supprimerConducteur&conducteurId=" . $conducteur->getId() . "'>
         <img src='./Ressources/icons/delete.png' width='20px' data-toggle='modal' data-target='#exampleModal-". $conducteur->getId()."'></a>
         </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez vous vraiment supprimer ce conducteur :
        <?php echo $conducteur->getPrenom()?>
        <?php echo $conducteur->getNom()?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>