
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mogra|Raleway" rel="stylesheet">
  </head>

  <body>
    <p>

    </p>
    <?php include'header.php';
    switch ($_SERVER['QUERY_STRING']) {
      case 'upload':
      include "add_film.php";
        break;

      default:
        include'main.php';
        break;
    }
    include'footer.php';
     ?>

  </body>
</html>
