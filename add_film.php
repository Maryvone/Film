<?php
include "connexion_bdd.php";
 ?>

    <form id="form_add" method="POST" enctype="multipart/form-data" action="upload.php">
      <label>Titre : <input required type="text" name="titre" value=""></label><br />
      <label>Acteurs : <input required type="text" name="acteurs" value=""></label><br />
      <label>Auteur : <input required type="text" name="auteur" value=""></label><br />
      <label>Date de sortie : <input required type="text" name="date_sortie" value=""></label><br />
        <select name="genre_upload" class="genre_upload">
            <option selected index="-1">Genre</option>
                <?php 
                include "connexion_bdd.php";
                $reponse = $bdd->query('SELECT * FROM genre');
                    while($donnees = $reponse->fetch()){?>
                    <option  value="<?php echo $donnees['id'];?>"><?php echo $donnees['name'] ?></option>
                    <?php } ?>
        </select>
      <label>Affiche : </label><input required type="file" name="fichier" value="">
      <input type="submit" name="ok" value="OK">
    </form>
