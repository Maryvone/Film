<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
//si dans l'url la valeur erreur=mdpnonidentiques, afficher le message echo "les mots de passes saisis ne sont pas identiques";
if (isset($_GET['erreur'])) {
  if ($_GET['erreur']=="mdpnonidentiques") {
    echo "les mots de passes saisis ne sont pas identiques";
    ?><form class="" action="form_inscription.php" method="post">
      <label for="">Pseudo:</label><input required type="text" name="pseudo" value=""><br />
      <label for="">Mot de passe:</label><input required type="password" name="mdp" value=""><br />
      <label for="">Confirmer mot de passe:</label><input required type="password" name="mdp_chek" value=""><br />
      <input type="submit" name="btn_inscription" value="OK">
    </form>
    <?php
  }
}
//sinon affiche mon formulaire initial
else{?>

<form class="" action="form_inscription.php" method="post">
    <label for="">Pseudo:</label><input required type="text" name="pseudo" value=""><br />
    <label for="">Mot de passe:</label><input required type="password" name="mdp" value=""><br />
    <label for="">Confirmer mot de passe:</label><input required type="password" name="mdp_chek" value=""><br />
    <input type="submit" name="btn_inscription" value="OK">
  </form>  <?php
}

 ?>
  </body>
</html>
