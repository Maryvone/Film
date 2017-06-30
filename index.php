
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
    
    include'header.php';
    
    
    //si dans l'url il y a écrit (ce qu'il y a mis dans le case après un ?) il inclut la page demandée.
    switch ($_SERVER['QUERY_STRING']) {
    case '':
      include'main.php';
        break;
    case 'upload':
      include "add_film.php";
        break;
        
    case 'genre':
      include "genre.php";
        break;
    
    case 'connexion':
      include "connexion.php";
        break;
    
    case 'inscription':
      include "inscription.php";
        break;
    
    case 'modifier='.$_GET['modifier']  :
      include "modifier.php";
        break;
 

    }
    include'footer.php';
     ?>

  </body>
</html>
