<?php
    session_start();

    // controllo se esiste la sessione, sennò la creo
    if (!isset($_SESSION['voti'])) {
        $_SESSION['voti'] = array();
        $_SESSION['numeroVoti'] = 0;
    }

    // incremento il numero di voti ogni volta che invio il form
    $_SESSION['numeroVoti'] = $_SESSION['numeroVoti'] + 1;

    array_push($_SESSION['voti'], $_POST['voto']) ;
    
    $_SESSION['ultimaData'] = $_POST['data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">

    <h1><a style="text-decoration: none;" href="presentazione.html">Torna alla pagina presentazione</a></h1>
    <h1><a style="text-decoration: none;" href="risultati.php">Vai ai risultati</a></h1>
    
</body>
</html>
