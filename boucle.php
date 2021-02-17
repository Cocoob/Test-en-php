<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php - Boucles</title>
</head>
<body>
    <section class="main">
        <h1>Les boucles</h1>
        <div class="exercices">
            <div class="exercice1">
                <?php
                // Exercice 1
                for ($var = 0; $var <=10; $var++)
                {
                    echo $var.' ';
                }
                ?>
            </div>
            <div class="exercice2">
                <?php
                // Exercice 2
                $var = 0;
                $var2 = 8;

                for ($var ; $var <=20; $var++)
                {
                    $result = $var * $var2;
                    echo $result.' ';
                }
                ?>
            </div>
            <div class="exercice3">
                <?php
                // Exercice 3
                $var = 100;
                $var2 = 8;

                for ($var ; $var >=10; $var--)
                {
                    $result = $var - $var2;
                    echo $result.' ';
                }
                ?>
            </div>
            <div class="exercice4">
                <?php
                // Exercice 4
                $var = 1;
                for ($var; $var <= 10; $var *= 1.5){
                echo $var. ' ';
            }

            ?>
        </div>
        <div class="exercice5">
            <?php
            // Exercice 5
            $a;
            for ($a = 1; $a <= 15; $a++)
            {
                echo "On y arrive presque / ";
            }
            ?>
        </div>
        <div class="exercice6">
            <?php
            // Exercice 6
            $a;
            for ($a = 20; $a >= 0; $a--)
            {
                echo "C'est presque bon / ";
            }
            ?>
            <?php
            ?></div>
            <div class="exercice7">
                <?php
                // Exercice 7
                $a;
                for ($a = 1; $a <= 100; $a+=15)
                {
                    echo "On tient le bon bout / ";
                }
                ?>
                <?php
                ?></div>
                <div class="exercice8">
                    <?php
                    // Exercice 8
                    $a;
                    for ($a = 200; $a >= 0; $a-=12)
                    {
                        echo "Enfin!!! / ";
                    }
                    ?>
                </div>
            </div>
        </section>
        
    </body>
    </html>























