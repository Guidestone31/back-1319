<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h1>Titre de la page</h1>

    <h2><?php echo 'ok';
        $a = 1; ?></h2>

    <p>Lorem ipsum dolor sit amet.</p>
    <p>Debitis sapiente dolorem reiciendis voluptatibus.</p>

    <?php echo "<h2>ok</h2>";
    echo $a; ?>
    <?= "<h2>ok</h2>"; ?>
    <?php

    // Commentaire // qqq

    $a = 1; // la variable a vaut ...
    $a = 1; # la variable a vaut ...

    # Commentaire // qqq
    /* Commentaire */

    /*
        Commentaire 1
        Commentaire 2
    */

    /* Commentaire */

    /**
     * Undocumented function
     *
     * @param [type] $param1
     * @param [type] $param2
     * @param float $param3
     * @return integer
     */
    // function une_fonction($param1, $param2, float $param3): int
    // {
    //     //traitement
    //     return $valeur;
    // }

    // $a = 1;
    // $b = "PHP 8";
    // echo $a;
    var_dump($a);
    ?>

    <p>Necessitatibus et eos alias assumenda!</p>
</body>

</html>