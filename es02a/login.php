<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Controllo credenziali</title>
</head>
<body>

    <h3>Controllo credenziali</h3>

    <?php

    $usr = $_POST["username"];
    $pwd = $_POST["password"];

    if ($usr == "admin" && $pwd == "password") {
        echo "<h4>Benvenuto " . $usr .
             "<br>Nell'area riservata del sito!</h4>";
    } else {
        echo "<h4>Attenzione! Nome utente o password sbagliate.<br>
              Accesso negato!</h4>";
    }

    ?>

    <br>
    <a href="index.html">Torna al login</a>

</body>
</html>
