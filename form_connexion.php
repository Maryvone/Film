<?php
$mdp_hash = hash("sha512",$_POST['mdp']);
include'connexion_bdd.php';

//selection du pseudo dans la bdd si égalité avec le pseudo saisi dans le formulaire
  //-> la methode prepare selectionne le pseudo dans la bdd s'il est égal à ce qui est saisi et du mot de passe
$bdd_pseudo_connex = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :pass');
$bdd_pseudo_connex->bindParam(':pseudo', $_POST['pseudo']);
$bdd_pseudo_connex->bindParam(':pass', $mdp_hash);
  //la methode execute applique la requete et retourne un vrai ou faux
$bdd_pseudo_connex->execute();
  //la méthode fetch récupère la ligne
$pseudo_ok = $bdd_pseudo_connex->fetch();

//si le pseudo et le mot de passe saisi sont bien existant dans la bdd ça ouvre la session sinon ça affiche un message d'erreur
if ($bdd_pseudo_connex){
    session_start();
    $_SESSION['id'] = $pseudo_ok['id'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    echo "vous êtes connecté";
    header('location:index.php');
}else
{
    echo "mauvais mot de pass";
}
 ?>
