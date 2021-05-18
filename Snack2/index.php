<?php
    // GET Name Parameter
    $userName = $_GET["user"];

    // GET Mail Parameter
    $userMail = $_GET["mail"];

    // GET Age Parameter
    $userAge = $_GET["age"];

    // Validation Acess flag
    $validationAccess = true;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks B1 - Snack 2 </title>

    <link rel="stylesheet" href="style.css">
</head>
<body>



    <!-- MAIN -->
    <main>
        <!-- TITLE -->
        <h1>User verification</h1>

       <div>
            <?php

                if ( strlen($user) > 3) {
                    $validationAccess = false;
                    // Error message
                    echo "Il nome deve avere almeno 3 caratteri - ";
                } else if ( strpos($userMail, "@") === false || strpos($userMail, ".") === false ){
                    $validationAccess = false;
                    // Error message
                    echo "La mail non è valida - ";
                } else if ( !is_numeric($userAge) ) {
                    $validationAccess = false;
                    // Error message
                    echo "L'età non è valida";
                }

                if ( $validationAccess ) {
                    echo "Accesso riuscito!";
                } else {
                    echo "Accesso negato!";
                }

            ?>
       </div>
    </main>
    <!-- END MAIN -->
</body>
</html>