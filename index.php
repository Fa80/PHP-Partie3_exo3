<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie3_Exo3</title>
</head>
<body>
    <?php

/*Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieure ou égale à 10 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    décrémenter la première variable

*/
        $num = 100;
        $mult = 4;
          while($num >= 10){
          ?>
        <p>  <?php   echo $result = $num * $mult. ' '; ?></p>
        <?php
        $num--;
      }
         ?>

</body>
</html>
