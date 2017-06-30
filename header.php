<?php
session_start();
 ?>

<header>
  <a href="index.php"><h1 class="logo">AFPA-Bay</h1></a>
  <!--moteur de recherche-->
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
    <a href="?inscription" class="inscription">Inscription</a>
    <a href="?connexion" class="connexion">Connexion</a>
     <?php }
          ?>
    
    <nav class="nav">
    <?php
    ?>
    <form action="?genre" method="POST" class="liste_genre">
    <select id="select_genre" name="genre" onchange="this.form.submit()">
        <option selected index="-1">Sélectionnez un genre de film</option>
    
<?php 
include "connexion_bdd.php";

    $reponse = $bdd->query('SELECT * FROM genre');
            while($donnees = $reponse->fetch()){?>
        <option value="<?php echo $donnees['id'];?>"><?php echo $donnees['name'] ?></option>
                   
            <?php }
    ?>
        
    </select>
    </form>
  <a href="index.php?upload" class="add_film">+</a>
</nav>

  </div>
</header>

