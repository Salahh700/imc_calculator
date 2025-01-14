<?php

    $name=$_POST["name"];
    $age=$_POST["age"];
    $weight=$_POST["weight"];
    $height=$_POST["height"];


    $bdd = new PDO ('mysql:host=localhost;dbname=imc', 'root', '');

    $requete="INSERT INTO `user`(`name`, `age`, `weight`, `height`) VALUES ('$name' , $age, $weight, $height );";

    $as=$bdd->query($requete);

            
    header('Location: ./index.php');

?>