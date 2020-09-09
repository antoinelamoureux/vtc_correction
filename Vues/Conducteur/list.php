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
      foreach($tous_les_conducteurs as $conducteur) {
          echo "<tr>";
          echo "<td>".$conducteur->getId()."</td>";
          echo "<td>".$conducteur->getPrenom()."</td>";
          echo "<td>".$conducteur->getNom()."</td>";
          echo "<td><img src='./Ressources/icons/edit.png' width=20px'>&nbsp;&nbsp;<img src='./Ressources/icons/delete.png' width='20px'</td>";
          echo "</tr>";

      }
      ?>
  </tbody>
</table>