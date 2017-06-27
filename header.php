<?php
session_start();
 ?>
<header>
  <a href="index.php"><h1 class="logo">AFPA-Bay</h1></a>
  <div class="recherche">
    <form class="recherche_form" method="GET">
      <input type="search" name="input_search" value="" class="search_engine" placeholder="Recherche">
      <input type="submit" name="submit" value="OK" class="envoyer">
    </form>
     
      <?php 
      if (isset($_SESSION['id'])){
          echo "Bonjour ".$_SESSION['pseudo'];?>
          <a href="deconnexion.php" class="deconnexion">Déconnexion</a>
          <?php
      }else{?>
    <a href="inscription.php" target="_blank" class="inscription">Inscription</a>
    <a href="connexion.php" target="_blank" class="connexion">Connexion</a>
     <?php }
          ?>

  </div>
</header>
