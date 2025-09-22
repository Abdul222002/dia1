<?php
<<<<<<< HEAD
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
=======
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

>>>>>>> 29104682b0a42c4f2e362f6e952ab069f03215f4
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
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

=======
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
>>>>>>> 29104682b0a42c4f2e362f6e952ab069f03215f4
