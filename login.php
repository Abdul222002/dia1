<?php
    $user ["Manolo"] ="manolin";
    $user ["Pepe"] ="pepin";
    $user ["admin"] ="admin";
    $user ["root"] ="toor";

    $login = false;


    if(!$login){
    if (!empty($_POST["user"] ) && !empty($_POST["prassword"])) {
        echo "<h1>Bienvenido ".$_POST["user"]."</h1>";
        $login = true;
    }else
    {
        echo "<h1>Debe de itroducir los dos apartados</h1>";
    }
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
    <h1>
        REGISTRESE POR FAVOR
    </h1>
    <form action="login.php" method="POST">
        <input type="text" name="user" placeholder="user">
        <input type="password" name="prassword" placeholder="prassword">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>