<?php
    $bdd = new PDO ('mysql:host=localhost;dbname=imc', 'root', '');

    $id=$_GET["id"];
    $nameupd=$_POST["name"];
    $ageupd=$_POST["age"];
    $weightupd=$_POST["weight"];
    $heightupd=$_POST["height"];

    $requete = "UPDATE `user` SET `name`='$nameupd', `age`='$ageupd', `weight`='$weightupd', `height`='$heightupd' WHERE `id`='$id'";

    $as=$bdd->query($requete);

    header ("location: ./index.php");

?>