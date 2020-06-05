<?php
    
    function myFunction() {
    $departmentHF = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme');

        foreach ($departmentHF as $i => $i_value) {
            echo 'Le département ' . $i_value . ' a le numéro ' . $i . chr(10);
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>

<body>

    <h1>Exercice 10</h1>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.</p>
    <p>Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département</p>
    <p><?= myFunction() ?></p>

</body>

</html>