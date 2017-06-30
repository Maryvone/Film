<main>



<?php
try
{
    include "connexion_bdd.php";
    $reponse = $bdd->query('SELECT * FROM film INNER JOIN genre ON film.genre_id = genre.id');
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
         <p>Genre: <?php echo $donnees['name']; ?> </p>
         <a href="?supprimer=<?php echo $donnees['id_film']; ?>"><p>Supprimer le film</p></a>
         <a href="?modifier=<?php echo $donnees['id_film']; ?>"><p>Modifier la fiche du film</p></a>
        </div>
       </div>
       <?php
      
    }
    if (isset($_GET['supprimer'])){
           include "connexion_bdd.php";
           $genre_id = $_GET['supprimer'];
           $reponse = $bdd->query('DELETE FROM film WHERE id_film = '.$genre_id.' ');
           }
    


}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


</main>