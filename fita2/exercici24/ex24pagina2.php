<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2.4 Pagina 2</title>
</head>
<body>
    <?php
        if (isset($_POST['password1']) && isset($_POST['password2'])) {
            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];
            if ($password1 != $password2) {
                echo "Error: les contrasenyes han de coincidir";
            } else if (!preg_match('/\d/', $password1)) {
                echo "ERROR: La contrasenya ha de tenir al menys un número.";
            } else {
                echo "La contrasenya es vàlida";
            }
        } else {
            echo "Error: No s'ha rebut cap dada";
        }
    ?>
</body>
</html>