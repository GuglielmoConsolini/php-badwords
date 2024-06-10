<?php

$testo = $_GET["testo"];
$parola = $_GET["parola"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elabora lunghezza testo</title>
</head>
<body>
    <!-- TESTO DEL PRIMO FORM -->
    <h1>Il testo è lungo <?php echo strlen($testo) ?> caratteri</h1>

    <!-- TESTO DEL SECONDO FORM -->
    <h2> <?php echo str_replace($parola,"***","La parola censurata :$parola") ?></h2>
    <h2>Il testo censurato è lungo <?php echo strlen($parola) ?> caratteri</h2>
</body>
</html>