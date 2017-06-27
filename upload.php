
<?php
//connexion bdd
$bdd = new PDO('mysql:host=localhost;dbname=afpa-bay;charset=utf8', 'root', 'mcueff123');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

//téléchargement de l'image
$target_dir = "img/";
$target_file = $target_dir . $_POST["titre"] .".jpg";

    if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
        echo "The file ". basename($_FILES["fichier"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

//insertion dans la bdd
$requete = $bdd->prepare('INSERT INTO film (titre, auteur, acteurs, date_sortie, image_film)
                              VALUES(:titre, :auteur, :acteurs, :date_sortie, :image)');
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$acteurs = $_POST['acteurs'];
$date_sortie = $_POST['date_sortie'];
$image = $target_file;
$requete->bindParam(':titre', $titre);
$requete->bindParam(':acteurs', $acteurs);
$requete->bindParam(':auteur', $auteur);
$requete->bindParam(':date_sortie', $date_sortie);
$requete->bindParam(':image', $image);
$requete->execute();

header('location:index.php?upload');
?>
