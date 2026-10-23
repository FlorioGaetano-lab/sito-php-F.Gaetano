<!DOCTYPE html>
<html>
<head>
    <title>Triangoli con PHP</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>

<?php
// (a) Triangolo crescente
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<br>';

// (b) Triangolo decrescente
for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<br>';

// (c) Triangolo decrescente allineato a destra
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo '&nbsp;';
    }

    for ($j = 10; $j >= $i; $j--) {
        echo '*';
    }

    echo '<br>';
}

echo '<br>';

// (d) Triangolo crescente allineato a destra
for ($i = 1; $i <= 10; $i++) {
    for ($j = 10; $j > $i; $j--) {
        echo '&nbsp;';
    }

    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }

    echo '<br>';
}
?>

</body>
</html>
