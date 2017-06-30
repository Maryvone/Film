<?php
//connexion à la bdd

    $bdd = new PDO('mysql:host=localhost;dbname=afpa-bay;charset=utf8', 'root', 'mcueff123');
    //$bdd = new PDO('mysql:host=localhost;dbname=maryvone;charset=utf8', 'root', '000000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
 ?>
