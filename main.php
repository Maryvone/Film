<main>
<nav class="nav">
  <fieldset>genre
    <option value="">Comédie</option>
    <option value="">Drame</option>
    <option value="">Science-fiction</option>
  </fieldset>

  <a href="index.php?upload" class="add_film">+</a>
</nav>


<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=afpa-bay;charset=utf8', 'root', 'mcueff123');
    $reponse = $bdd->query('SELECT * FROM film');
    //moteur de recherche
    if(isset($_GET['input_search']) AND !empty($_GET['input_search'])){
      $input_search = htmlspecialchars($_GET['input_search']);
      $reponse = $bdd->query('SELECT * FROM film WHERE titre LIKE "%'.$input_search.'%"');
    }
    while ($donnees = $reponse->fetch())
    {

       ?>
       <div class="film">
         <a class="lien_film" href="description_film.php" target="_blank"><img class="img_resize" src="<?php echo $donnees['image_film']; ?>" alt="img_film" class="img_film"></a>
         <div class="text_film">
         <p class="titre_film"> <?php echo $donnees['titre']; ?></p>
         <p class="auteur_film">Auteur: <?php echo $donnees['auteur']; ?></p>
         <p class="annee_film">Date de sortie: <?php echo $donnees['date_sortie']; ?></p>
        </div>
       </div>
       <?php
    }


}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


</main>
