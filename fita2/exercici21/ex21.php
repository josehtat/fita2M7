<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 UF1 Exercici 2.1</title>
</head>
<body>
    <form action="" method="post">
        <label for="user" name = "user">Usuari: </label>
        <input type="text" id="user" name="user"/>
        <br/>
        <label for="password" name="password">Contraseña: </label>
        <input type="password" id="password" name="password"/>
        <br/>
        <input type="submit"/>
    </form>
    <?php
        $hardcoded = [
            "jose"=>"jose1234",
            "danny"=>"danny1234"
        ];
        if(isset($_POST["user"]) && isset($_POST["password"])){
            $user = $_POST["user"];
            $password = $_POST["password"];
            if(array_key_exists($user, $hardcoded)) {
                if ($hardcoded[$user] == $password) {
                    echo "Login correcte!";
                } else {
                    echo "Login incorrecte!";
                }
            } else {
                echo "Login incorrecte!";
            }
        }
    ?>
</body>
</html>