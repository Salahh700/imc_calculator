<!DOCTYPE html>
    <html lang="en">

        <?php

        $bdd = new PDO ('mysql:host=localhost;dbname=imc', 'root', '');

        $requete='SELECT * from user ';

        $res=$bdd->query($requete);

        $resultat=$res->fetchALL();



        ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <title>IMC Calculator</title>
    </head>
    <h1>IMC Calculator</h1>
        <body>
            

            <H4>Bienvenue sur le site de calculateur d'IMC, consultez les personnes en dessous pour analyser les IMC de la population </H4><br><br>

            
            <form  action="./controllercreate.php" method="post">
                <p>Ajoutez une nouvelle personne et calculez l'IMC </p>
                <input type="text" name="name" placeholder="Nom">
                <input type="text" name="age" placeholder="Age">
                <input type="text" name="weight" placeholder="Poids">
                <input type="text" name="height" placeholder="Taille">
                <input class="button_create" type="submit" value="Ajouter" name="Ajouter"><br><br>




            </form>
                
                    <div class="container">
                        <?php
                        foreach ($resultat as $res) {
                            ?><div class="foreach"><?php
                            echo $res['name'] . '<br><br>';
                            echo $res['age'] . ' ans<br>';
                            echo $res['weight'] . ' kg<br>';
                            echo $res['height'] . ' cm<br>';
                            $imc = $res['weight'] / (($res['height']/100) * ($res['height']/100));
                            $imc=number_format($imc,2);
                            echo 'IMC : ' . $imc . '<br><br>';
                            if ($imc < 18.5) {
                                echo 'Poids insuffisant<br>';
                            } elseif ($imc >= 18.5 && $imc < 25) {
                                echo 'Poids normal<br>';
                            } elseif ($imc >= 25 && $imc < 30) {
                                echo 'Surpoids<br>';
                            } elseif ($imc >= 30 && $imc < 35) {
                                echo 'Obésité modérée<br>';
                            } elseif ($imc >= 35 && $imc < 40) {
                                echo 'Obésité sévère<br>';
                            } elseif ($imc >= 40) {
                                echo 'Obésité morbide<br>';
                            }
                            ?> <br> <a href="./update.php?id=<?php echo $res["id"];?>&name=<?php echo $res["name"];?>&age=<?php echo $res["age"];?>&weight=<?php echo $res["weight"];?>&height=<?php echo $res["height"];?>"><button class ="button_go_update">Modifier</button></a> <br> <?php
                            ?> <a href="./controllerdelete.php?id=<?php echo $res["id"];?>"><button class ="button_delete">Supprimer</button></a> <?php

                            ?> <br><br><br><br> 
                            
                        </div><?php
                            }?>
                    </div>
                    

                    
        






        </body>
    </html>