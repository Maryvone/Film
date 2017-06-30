<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mogra|Raleway" rel="stylesheet">
  </head>

  <body>

<?php
if (isset($_GET['modifier'])){
           include "connexion_bdd.php";
           $genre_id = $_GET['modifier'];
           $reponse = $bdd->query('SELECT * FROM film INNER JOIN genre ON film.genre_id = genre.id WHERE id_film = '.$genre_id.' ');
           while ($donnees = $reponse->fetch())
    {

       ?>
       <div class="film">
         <a class="lien_film" ><img class="img_resize" src="<?php echo $donnees['image_film']; ?>" alt="img_film" class="img_film"></a>
         <div class="text_film">
             <form id="form_modifier" method="POST" enctype="multipart/form-data" action="">
                 <label class="titre_film">Titre : <input  type="text" name="titre_modifier" value="<?php echo $donnees['titre']; ?>" placeholder="">  </label><br />
                 <label class="acteurs_film">Acteurs : <input  type="text" name="acteurs_modifier" value="<?php echo $donnees['acteurs']; ?>" placeholder=""></label><br />
                 <label class="auteur_film">Auteur : <input type="text" name="auteur_modifier" value="<?php echo $donnees['auteur']; ?>" placeholder=""></label><br />
                 <label class="annee_film">Date de sortie : <input type="text" name="date_sortie_modifier" value="<?php echo $donnees['date_sortie']; ?>" placeholder=""></label><br />
                 <select name="genre_upload" class="genre_upload">
                 <?php 
                    include "connexion_bdd.php";
                    $reponse = $bdd->query('SELECT * FROM genre');
                    while($donnees = $reponse->fetch()){?>
                    <option  value="<?php echo $donnees['id'];?>" selected><?php echo $donnees['name']; ?> </option>
                    <?php } ?>
                </select>

                <input type="submit" name="ok_modifier" value="OK">
            </form>

        </div>
       </div>
      
       <?php
      
    }
           }

?>
        </body>
</html>
<?php

if(!empty($_POST['titre_modifier']) || !empty($_POST['acteurs_modifier']) || !empty($_POST['auteur_modifier']) || !empty($_POST['date_sortie_modifier'])){
    include "connexion_bdd.php";
    $titre = $_POST['titre_modifier'];
    $acteur = $_POST['acteurs_modifier'];
    $auteur = $_POST['auteur_modifier'];
    $date_sortie = $_POST['date_sortie_modifier'];
    $requete = $bdd->query('UPDATE film SET titre = "'.$titre.'", acteurs = "'.$acteur.'", auteur = "'.$auteur.'", date_sortie = "'.$date_sortie.'"   WHERE id_film = '.$genre_id.' ');
}

?>
