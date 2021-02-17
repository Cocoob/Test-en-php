<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php - Array</title>
</head>
<body>
    <section class="main">
        <h1>Les array</h1>
        <div class="exercices">
            <div class="exercice1">
                <?php
                // Exercice 1
                $mois = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
                ?>
            </div>
            <div class="exercice2">
                <?php
                
                // Exercice 2
                echo $mois[2];
                ?>
            </div>
            <div class="exercice3">
                <?php
                // Exercice 3
                echo $mois[5];
                ?>
            </div>
            <div class="exercice4">
                <?php
                // Exercice 4
                $mois[9] = 'Août';

                ?>
            </div>
            <div class="exercice5">
                <?php
                // Exercice 5
                $Hauts_de_france[02] = 'Aisne';
                $Hauts_de_france[59] = 'Nord';
                $Hauts_de_france[60] = 'Oise';
                $Hauts_de_france[62] = 'Pas-de-calais';
                $Hauts_de_france[80] = 'Somme';
                ?>
            </div>
            <div class="exercice6">
                <?php
                // Exercice 6
                echo $Hauts_de_france[59];
                ?>
                <?php
                ?></div>
                <div class="exercice7">
                    <?php
                    // Exercice 7
                    // Exercice 7
                    $Hauts_de_france[51] = "Marne";
                    ?>
                    <?php
                    ?></div>
                    <div class="exercice8">
                        <?php
                        // Exercice 8
                        for ($result = 0 ; $result < 12; $result++){
                    echo $mois[$result]. '</br>';
                }
                ?>
            </div>
            <div class="exercice9">
                <?php
                // Exercice 9
                foreach ($Hauts_de_france as $departement){
            echo $departement. ' </br>';
        }
        ?>
    </div>
    <div class="exercice10">
        <?php
        // Exercice 10
        foreach ($Hauts_de_france as $cle => $departement){
    echo 'Le département ' . $departement. ' a le numéro ' .$cle. ' </br>' ;
}
?>
</div>
</div>
</section>

</body>
</html>
