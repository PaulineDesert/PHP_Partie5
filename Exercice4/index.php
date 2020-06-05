<?php

    $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    $months2 = array(7 => 'août');
    $monthsV2 = array_replace($months, $months2);

    function myFunction() {
    $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    $months2 = array(7 => 'août');
    $monthsV2 = array_replace($months, $months2);

      foreach ($monthsV2 as $value) {
        echo $value . chr(10);
      }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>

    <h1>Exercice 4</h1>
    <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
    <p><?= $monthsV2[7] ?></p>
    <p><?= myFunction() ?></p>

</body>

</html>