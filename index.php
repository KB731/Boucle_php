<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Boucle do-while
    $chf = 0;

    do {
        echo $chf . '<br>';
        $chf++;
    } while ($chf < 10);
    echo '<br><hr>';
    // Boucle for
    for ($chf = 0; $chf < 11; $chf++) {
        echo $chf;
    }
    echo '<br><hr>';
    for ($chf = 1; $chf < 11; $chf++) {
        echo $chf . '<br>';
        if ($chf == 10) {
            echo "c'est la fin";
        }
    }
    echo '<br><hr>';
    // Parcourir un tableau
    $chf = array(1, 2, 3, 47, 5, 606, 6, 7, 8, 9);

    for ($i = 0; $i < count($chf); $i++) {
        echo $chf[$i] . '<br>';
    }
    echo '<br><hr>';
    // Boucle foreach

    $chf = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($chf as $valeur) {
        echo $valeur . '<br>';
    }
    echo '<br><hr>';

    $chf = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    foreach ($chf as $valeur) {
        echo $valeur;
        if ($valeur == 10) {
            echo "c'est la fin";
        }
    }
    echo '<br><hr>';
    ?>
</body>

</html>