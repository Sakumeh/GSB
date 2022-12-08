<div id="contenu">
      <h2>Etat de tous les frais par mois</h2>
      <h3>Période</h3>
      <form action="index.php?uc=etatFrais&action=validerPeriode" method="post">
      <div class="corpsForm">

      <p>

        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
            foreach ($lesMois as $unMois)
            {
                $mois = $unMois['mois'];
                $numAnnee =  $unMois['numAnnee'];
                $numMois =  $unMois['numMois'];
                ?>
                <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
                <?php 
            }

           ?>

        </select>


      </p>
     <!-- refaire une bloucle $lesTypes -->
      <label for="lstType" accesskey="n">Type : </label>
        <select id="lstType" name="lstType">
            <?php
            foreach ($lesTypes as $unType)
            {
                $libelle=$unType['libelle'];
                $type = $unType['id'];
                ?>
                <option value="<?php echo $type ?>"><?php echo $libelle;?> </option>
                <?php 


            }

           ?>

        </select>
 
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
      </p> 
      </div>

      </form>