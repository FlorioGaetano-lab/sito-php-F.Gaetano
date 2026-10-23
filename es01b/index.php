<!DOCTYPE html>
<html>
<head>
<title>Buon...</title>
</head>
<body>

<h1>Ciao!</h1>

<?php
$nome = "Paolo";
$browser = $_SERVER['HTTP_USER_AGENT'];

$today = new DateTime("now", new DateTimeZone('Europe/Rome'));
$ora = $today->format('H');

if ($ora >= 8 && $ora < 12) {
    echo "Buongiorno " . $nome . "<br>";
} elseif ($ora >= 12 && $ora < 20) {
    echo "Buonasera " . $nome . "<br>";
} else {
    echo "Buonanotte " . $nome . "<br>";
}

echo "Stai usando il browser: " . $browser;
?>

</body>
</html>
