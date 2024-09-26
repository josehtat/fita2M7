<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex22 p3</title>
</head>
<body>
<?php
    if (isset($_GET['comanda'])) {
        $comanda = (int)$_GET['comanda'];
        echo "<h1>Iniciar Comanda $comanda</h1>";
    } else {
        echo "<h1>No s'ha seleccionat cap comanda.</h1>";
    }
    ?>
</body>
</html>