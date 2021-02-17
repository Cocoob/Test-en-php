<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php - Variables</title>
</head>
<body>
    <section class="main">
        <h1>Les variables</h1>
        <div class="exercices">
            <div class="exercice1">
                <?php
                // Exercice 1
                $name = "Corentin ";
                echo $name;
                ?>
            </div>
            <div class="exercice2">
                <?php
                // Exercice 2
                $first_name = "Corentin ";
                $last_name = "Bousquet ";
                $age = 24;
                echo $first_name, $last_name, $age;
                ?>
            </div>
            <div class="exercice3">
                <?php
                // Exercice 3
                $km = 1;
                echo $km;

                $km = 3;
                echo $km;

                $km = 125;
                echo $km;
                ?>
            </div>
            <div class="exercice4">
                <?php
                // Exercice 4
                $string = " Yo la team ";
                $int = 24;
                $float = 24.4;
                $bollean = true;
                echo $string, $int, $float, $bollean;
                ?>
            </div>
            <div class="exercice5">
                <?php
                // Exercice 5
                $exercice_5 = null;
                echo $exercice_5;
                $exercice_5 = 5;
                echo $exercice_5;
                ?>
            </div>
            <div class="exercice6">
                <?php
                // Exercice 6
                echo ' Bonjour '. $name .' , comment vas-tu ?';
                ?>
                <?php
                ?></div>
                <div class="exercice7">
                    <?php
                    // Exercice 7
                    echo ' Bonjour ' . $last_name . ' ' . $name . ' , tu as ' . $age . ' ans.';
                    ?>
                    <?php
                    ?></div>
                    <div class="exercice8">
                        <?php
                        // Exercice 8
                        $addition = 7+0;
                        $multiplication = 100*1;
                        $division = 5/1;
                        echo $addition, $multiplication, $division;
                        ?>
                    </div>
                </div>
            </section>
            
        </body>
        </html>
















?>
