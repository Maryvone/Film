<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=afpa-bay;charset=utf8', 'root', 'mcueff123');

    $reponse = $bdd->query('SELECT * from film');

    while ($donnees = $reponse->fetch())
    {
       var_dump($donnees);
    }


}catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
