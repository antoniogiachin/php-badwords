<?php

    // stringa da stampare
    $stringaStampa = 'ciao a tutti belli e ...! ';

    // rimuovo spaziature
    $stringaStampaFinale = str_replace(" ", "", $stringaStampa);

    
    // se utente inserisce una parola con get allora...
    if(isset($_GET['parolaUtente'])){
        //isset è una funzione propria di php che restituisce true o false. Serve per stabilire se esiste una variabile o un indice di un array.
    
        
        // parola da censurare
        $parolaUtente = $_GET['parolaUtente'];
    
        
        // con str_replace dico di sostituire la parola inserita con *** 
        $parolaCensurata = str_replace("brutti", "***", $parolaUtente);
        
        // stringa con censura
        $stringaStampa = 'ciao a tutti belli e ' . $parolaCensurata;
    };

    // lunghezza stringa da stampare
    $stringaStampaLength = strlen($stringaStampaFinale);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Stampo la stringa e la sua lunghezza -->
    <h1><?php echo "La stringa "  . "'" . $stringaStampa . "'" . " e' lunga "  . $stringaStampaLength . " caratteri!"; ?></h1>

</body>
</html>