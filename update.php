<!DOCTYPE html>

<?php

$id=$_GET["id"];

$nom=$_GET["name"];

$age=$_GET["age"];

$weight=$_GET["weight"];

$height=$_GET["height"];



$bdd = new PDO ('mysql:host=localhost;dbname=imc', 'root', '');



?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <title>Modification des paramètres </title>
    </head>
        <body>
            <form class="form_update" action="./controllerupdate.php?id=<?php echo $id ; ?>" method="post">

                <p>Modifiez les paramètres de <?php echo $nom ;?></p><br><br>

                <input type="text" name="name" placeholder="Nom" value="<?php echo $nom ;?>"><br>
                <input type="text" name="age" placeholder="Age" value="<?php echo $age ;?>"><br>
                <input type="text" name="weight" placeholder="Poids" value="<?php echo $weight ;?>"><br>
                <input type="text" name="height" placeholder="Taille" value="<?php echo $height ;?>"><br>
                <input class="button_update" type="submit" value="Modifier" name="Modifier" ><br>



            </form>
        </body>
    </html>