<h3>Frais au forfait : 
    </h3>
    <div class="encadre">

      <table class="listeLegere">
             <tr>
                <th class="date">id du visiteur</th>
                <th class="date">Nom du visiteur</th>
                <th class="date">Prenom du visiteur</th>
                <th class="date">Type de frais</th>
                <th class='montant'>Montant cumulé</th>
             </tr>
        <?php
          foreach ($lesCumuls as $cumul) 
          {
        ?>
             <tr>
                <td><?php echo $cumul['id']; ?></td>
                <td><?php echo $cumul['nom']; ?></td>
                <td><?php echo $cumul['prenom']; ?></td>
                <td><?php echo $cumul['libelle']; ?></td>
                <td><?php echo $cumul['cumul']; ?>€</td>
             </tr>
        <?php 
        }
        ?>
    </table>
  </div>