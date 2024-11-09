<?php
session_start();

if (!isset($_SESSION['voti'])) {
    $_SESSION['voti'] = array();
    $_SESSION['numeroVoti'] = 0;
    $_SESSION['ultimaData'] = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Risultati</h1>

    <table>
        <tr>
            <th>Numero di voti</th>
            <th>Ultima data inviata</th>
        </tr>
        <tr>
            <td><?php echo $_SESSION['numeroVoti'] ?></td>
            <td><?php echo $_SESSION['ultimaData'] ?></td>
        </tr>
    </table>


        <?php 

        echo "<ul>";
        foreach ($_SESSION['voti'] as $voto) {
            echo "<li>$voto</li>";
        }
        echo "</ul>";


        echo "<h3>Media attuale:";

        if (count($_SESSION['voti']) > 0) {
            $somma = 0;
            foreach ($_SESSION['voti'] as $voto) {
                $somma += $voto;
            }
            echo $somma / count($_SESSION['voti']);
        } else {
            echo "0";
        }

        echo "</h3>";


        echo "<a href='presentazione.html'>Torna alla pagina presentazione</a>";

        ?>

</body>
</html>

                                                                    