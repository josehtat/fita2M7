<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2.2 Pagina 2</title>
</head>
<body>
    <?php
        $cantidad = (int)$_POST["cantidad"];
        if($cantidad > 0) {
            for ($i=0; $i < $cantidad; $i++) { 
                echo "<a href = 'ex22pagina3.php?comanda=".($i+1)."' alt = 'Link no encontrado'>Comanda". ($i+1) ."</a>";
                echo "<br/>";
            }
        } else {
            echo "No has introducido un número valido";
        }
    ?>
</body>
</html>