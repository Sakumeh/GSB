<nav class="menuLeft">
    <ul class="menu-ul">
    <li class="menu-item"><a href="index.php">Accueil</a></li>
        <nav class="menuLeft">
        <ul class="menu-ul">
        <?php if(isset($_SESSION['prenom'])) { ?>
        
			<li class="menu-item">
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           
           <li class="menu-item">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           <li class="menu-item">
              <a href="index.php?uc=etatFrais&action=Periode" title="Consultation de mes fiches de frais sur une période">État de tous les frais par mois</a>
           </li>
           
         
 	   <li class="menu-item">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
                 <?php } ?>
                 

         </ul>
    </ul>
</nav>
<section class="content">
