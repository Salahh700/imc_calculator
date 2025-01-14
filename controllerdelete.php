<?php

$bdd = new PDO ('mysql:host=localhost;dbname=imc', 'root', '');

$id=$_GET["id"];

$requete="DELETE FROM user WHERE id = $id ; ";

$as=$bdd->query($requete);

header('Location: ./index.php');



?>