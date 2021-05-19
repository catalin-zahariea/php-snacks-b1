<?php
    $partite = [
        [
            "casa" => "Roma",
            "ospite" => "Milano",
            "punteggioCasa" => rand(1, 100),
            "punteggioOspite" => rand(1, 100),
        ],
        [
            "casa" => "Lazio",
            "ospite" => "Firenze",
            "punteggioCasa" => rand(1, 100),
            "punteggioOspite" => rand(1, 100),
        ],
        [
            "casa" => "Sassuolo",
            "ospite" => "Pisa",
            "punteggioCasa" => rand(1, 100),
            "punteggioOspite" => rand(1, 100),
        ],
        [
            "casa" => "Torino",
            "ospite" => "Veneta",
            "punteggioCasa" => rand(1, 100),
            "punteggioOspite" => rand(1, 100),
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks B1 - Snack 1 </title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- MAIN -->
    <main>
        <!-- TITLE -->
        <h1>Le partite di questo fine settimana:</h1>

        <!-- LIST -->
        <ul>
            <?php for ( $i = 0; $i < count($partite); $i++ ) { ?>
            
                <?php $thisPartite = $partite[$i]; ?>
                <!-- <?php var_dump($thisPartite); ?> -->

                <li>
                    <?php echo $thisPartite["casa"]; ?> - 
                    <?php echo $thisPartite["ospite"]; ?> | 
                    <?php echo $thisPartite["punteggioCasa"]; ?> : 
                    <?php echo $thisPartite["punteggioOspite"]; ?>
                </li>

            <?php } ?>
        </ul>
    </main>
    <!-- END MAIN -->
</body>
</html>

