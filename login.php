<?php
    session_start();

    $users = array();
    $users ["Juan"] ="juanito";
    $users ["Manolo"] ="manolin";
    $users ["Pepe"] ="pepin";
    $users ["admin"] ="admin";
    $users ["root"] ="toor";

    $_SESSION["login"] = false;

    if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = false;}

    
    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: login.php");
    }

    if(isset($_POST["Enviar"])){
        if (!empty($_POST["user"]) && !empty($_POST["password"])) {
        foreach ($users as $key => $value) {
            if ($_POST["user"] == $key && $_POST["password"] == $value) {
                $_SESSION["login"] = true;
                break;
            }
        }
        if ($_SESSION["login"]) {
            if ($_POST["user"] == "admin") {
                echo "<h1>Bienvenido admin</h1>";   
                echo "<img src='images/admin.jpg'>";
            }else{
                echo "<h1>Bienvenido ".$_POST["user"]."</h1>";
            }
            $_SESSION["user"] = $_POST["user"];
        }else
        {
            echo "<h1>Usuario o contrasena incorrecta</h1>";
        }
    }else {
        if (empty($_POST["user"]) && empty($_POST["password"])){
            echo "<h1>Por favor ingrese sus datos</h1>";
        }else if (empty($_POST["user"])){
            echo "<h1>El campo usuario esta vacio</h1>";
        }else if (empty($_POST["password"])){
            echo "<h1>El campo contrasena esta vacio</h1>";
        }
    }
}

    
    

?>

//Preguntar al profesor por que no funciona el login con sesiones abriendo otra pestaña nueva 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
    if (!$_SESSION["login"]) {
    ?>
    <h1>
        REGISTRESE POR FAVOR
    </h1>
    <form action="login.php" method="POST">
        <input type="text" name="user" placeholder="user">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php
    } else {
        echo "<a href='login.php?logout'>Cerrar sesion</a>";
    }
    ?>
</body>
</html>

