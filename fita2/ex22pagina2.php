<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex22 p2</title>
</head>
<body>
    <h1>Llistat de comandes</h1>

    <?php
    if (isset($_POST['quantitat'])) {
        $quantitat = (int)$_POST['quantitat'];

        if ($quantitat > 0) {
            for ($i = 1; $i <= $quantitat; $i++) {
                echo "<a href='ex22pagina3.php?comanda=$i'>Comanda $i</a><br>";
            }
        } else {
            echo "Introdueix un nombre vàlid.";
        }
    } else {
        echo "No s'ha rebut cap quantitat.";
    }
    ?>
</body>
</html>