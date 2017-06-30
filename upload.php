
<?php
//connexion bdd
include "connexion_bdd.php";

//téléchargement de l'image
$target_dir = "img/";
$target_file = $target_dir . $_FILES["fichier"]["name"];

    if ($_FILES["fichier"]["name"]) {
        echo "The file ". basename($_FILES["fichier"]["name"]). " has been uploaded. <a href=\"index.php?upload\"><p>Retour accueil</p></a>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

//insertion dans la bdd table film
$requete = $bdd->prepare('INSERT INTO film (titre, auteur, acteurs, date_sortie, image_film, genre_id ) 
                              VALUES(:titre, :auteur, :acteurs, :date_sortie, :image, :genre)');
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$acteurs = $_POST['acteurs'];
$date_sortie = $_POST['date_sortie'];
$image = $target_file;
$genre = $_POST['genre_upload'];
$requete->bindParam(':titre', $titre);
$requete->bindParam(':acteurs', $acteurs);
$requete->bindParam(':auteur', $auteur);
$requete->bindParam(':date_sortie', $date_sortie);
$requete->bindParam(':image', $image);
$requete->bindParam(':genre', $genre);
$requete->execute();



//header('location:index.php?upload');
?>
