<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 4</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 4</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">

                <?php

                function returnsStringAsList($array)
                {
                    $values = "";

                    foreach ($array as $value) {
                        $values .= "<li>{$value}</li>";
                    }

                    return $values;
                }

                echo returnsStringAsList($arrayB);

                ?>

            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">

                <?php

                function returnsSomeValues($array)
                {
                    $values = "";

                    foreach ($array as $value) {


                        if (is_int($value) && $value % 2 === 0) {
                            $values .= "<li>{$value}</li>";
                        }
                    }

                    return $values;
                }

                echo returnsSomeValues($arrayB);

                ?>

            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">

                <?php

                function returnsIntegersIfIndexesEven($array)
                {
                    $values = "";

                    foreach ($array as $index => $value) {


                        if (is_int($value) && $index % 2 === 0) {
                            $values .= "<li>{$value}</li>";
                        }
                    }

                    return $values;
                }

                echo returnsIntegersIfIndexesEven($arrayB);

                ?>

            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">

                <?php

                function returnsValuesMultiplied($array)
                {

                    $newArray = [];

                    foreach ($array as $value) {

                        if (is_int($value)) {
                            $newArray[] = $value * 2;
                        }
                    }

                    return $newArray;
                }

                print_r(returnsValuesMultiplied($arrayA));

                ?>

            </div>
        </section>

        <!-- QUESTION 4 bis -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">

                <?php

                function returnsValuesDividedByNumber($array, $number)
                {

                    $newArray = [];

                    foreach ($array as $value) {

                        if (is_int($value)) {
                            $newArray[] = $value / $number;
                        }
                    }

                    return $newArray;
                }

                print_r(returnsValuesDividedByNumber($array, 2));

                ?>

            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">

                <?php

                function returnsArrayWithoutDuplicates($array)
                {

                    $newArray = array_unique($array);

                    return $newArray;
                }

                print_r(returnsArrayWithoutDuplicates($arrayA));

                ?>

            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">

                <?php

                function returnsSimilarValuesBetweenTwoArrays($array1, $array2)
                {

                    $newArray = array_intersect($array1, $array2);

                    $newArray = array_unique($newArray);

                    return $newArray;
                }

                print_r(returnsSimilarValuesBetweenTwoArrays($arrayA, $array));

                ?>

            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">

                <?php

                function returnsValuesMissingFromSecondArray($array1, $array2)
                {

                    $newArray = array_diff($array1, $array2);

                    return $newArray;
                }

                print_r(returnsValuesMissingFromSecondArray($arrayA, $arrayB));

                ?>

            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">

                <?php

                function returnsMissingValuesWithoutDuplicates($array1, $array2, $optionalParameter = false)
                {

                    $newArray = array_diff($array1, $array2);

                    if ($optionalParameter) {
                        $newArray = array_unique($newArray);
                    }

                    return $newArray;
                }

                print_r(returnsMissingValuesWithoutDuplicates($arrayA, $arrayB, true));

                ?>

            </div>
        </section>


        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">

                <?php

                function returnsSomeValuesFromArray($array, $number)
                {

                    return array_slice($array, 0, $number);

                }

                print_r(returnsSomeValuesFromArray($array, 3));

                ?>

            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>