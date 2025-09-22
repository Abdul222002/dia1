<?php
session_start();

class User {
    private $user;
    private $password;

    public function __construct($user, $password) {
        $this->user = $user;
        $this->password = $password;
    }
    public function getUser() {
        return $this->user;
    }
    public function getPassword() {
        return $this->password;
    }
}

// Lista de usuarios
$users["pepe"]  = new User("pepe","pepe");
$users["maria"] = new User("maria","maria");
$users["admin"] = new User("admin","admin");
$users["nami"]  = new User("nami","nami");

// Iniciar login
if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = false;
}

// Logout
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// Login
if (isset($_POST["Enviar"])) {
    if (!empty($_POST["user"]) && !empty($_POST["password"])) {
        foreach ($users as $value) {
            if ($_POST["user"] == $value->getUser() && $_POST["password"] == $value->getPassword()) {
                $_SESSION["login"] = true;
                $_SESSION["user"]  = $value->getUser();
                break;
            }
        }
        if ($_SESSION["login"]) {
            if ($_SESSION["user"] == "admin") {
                echo "<h1>Bienvenido admin</h1>";   
                echo "<img src='images/admin.jpg'>";
            } else {
                echo "<h1>Bienvenido ".$_SESSION["user"]."</h1>";
            }
        } else {
            echo "<h1>Usuario o contraseña incorrecta</h1>";
        }
    } else {
        if (empty($_POST["user"]) && empty($_POST["password"])) {
            echo "<h1>Por favor ingrese sus datos</h1>";
        } else if (empty($_POST["user"])) {
            echo "<h1>El campo usuario está vacío</h1>";
        } else if (empty($_POST["password"])) {
            echo "<h1>El campo contraseña está vacío</h1>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <?php if (!$_SESSION["login"]) { ?>
        <h1>REGISTRESE POR FAVOR</h1>
        <form action="login.php" method="POST">
            <input type="text" name="user" placeholder="user">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="Enviar" value="Enviar">
        </form>
    <?php } else { ?>
        <a href="login.php?logout">Cerrar sesión</a>
    <?php } ?>
</body>
</html>
