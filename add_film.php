<?php
session_start();
 ?>
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=afpa-bay;charset=utf8', 'root', 'mcueff123');
    /*$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);*/
 ?>

    <form method="POST" enctype="multipart/form-data" action="upload.php">
      <label>Titre<input required type="text" name="titre" value=""></label><br />
      <label>Acteurs<input required type="text" name="acteurs" value=""></label><br />
      <label>Auteur<input required type="text" name="auteur" value=""></label><br />
      <label>Date de sortie<input required type="text" name="date_sortie" value=""></label><br />
      <label>Affiche</label><input required type="file" name="fichier" value="">
      <input type="submit" name="ok" value="OK">
    </form>
