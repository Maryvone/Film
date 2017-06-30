<?php

try
{

include "connexion_bdd.php";
$id = $_POST['genre'];

$reponse = $bdd->query('SELECT * FROM film INNER JOIN genre ON film.genre_id = genre.id WHERE genre.id LIKE "%'.$id.'%"');
    
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
        </div>
       </div>
       <?php
    }

}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
