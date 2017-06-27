<?php
//hache le mot de passe pour la sécurité
$mdp_hash = hash("sha512",$_POST['mdp']);
//connexion à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=afpa-bay;charset=utf8', 'root', 'mcueff123');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

//verification si le pseudo existe déjà

//vérification de l'egalité du pseudo saisi dans l'input et les valeurs dans la colonne pseudo
  //selection du pseudo dans la bdd si égalité avec le pseudo saisi dans le formulaire
  //-> la methode prepare selectionne
$bdd_pseudo = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
$bdd_pseudo->bindParam(':pseudo', $_POST['pseudo']);
  //la methode execute applique la requete et retourne un vrai ou faux
$bdd_pseudo->execute();
  //la méthode fetch récupère la ligne
$pseudo_deja_existant = $bdd_pseudo->fetch();

//si le pseudo est déjà utilisé afficher "pseudo déjà utilisé"
if ($pseudo_deja_existant) {
  echo "pseudo déjà utilisé.";
}
//sinon inserer les valeurs dans la bdd
else{
  //vérifier si les deux mots de passes sont identiques
  if ($_POST['mdp']==$_POST['mdp_chek']) {
    //insertion dans la bdd du pseudo et du mdp saisi dans le formulaire
     $requete = $bdd->prepare('INSERT INTO utilisateurs (pseudo, mdp)
                                   VALUES(:pseudo, :mdp)');
     $pseudo = $_POST['pseudo'];

     $requete->bindParam(':pseudo', $pseudo);
     $requete->bindParam(':mdp', $mdp_hash);

     $requete->execute();
     echo "votre compte est bien créé.";
  }else {
      header('location:inscription.php?erreur=mdpnonidentiques');
  }

}
//vérifier si les deux mots de passe saisis sont identiques
  ?>
