<?php

class Peliculas {
    public $titulo;
    public $director;
    public $anio;

    function __construct($titulo, $director, $anio) {
        $this->titulo = $titulo;
        $this->director = $director;
        $this->anio = $anio;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDirector() {
        return $this->director;
    }

    function getAnio() {
        return $this->anio;
    }
}

$peliculas = array(
    new Peliculas("Inception", "Christopher Nolan", 2010),
    new Peliculas("The Godfather", "Francis Ford Coppola", 1972),
    new Peliculas("The Matrix", "The Wachowskis", 1999),
    new Peliculas("Interestellar", "Christopher Nolan", 2014),
    new Peliculas("Pulp Fiction", "Quentin Tarantino", 1994)
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peliculas</title>
</head>
<body>
    <h1>VideoClub</h1>
    <ul>
        <?php
            // Mostrar detalle si hay GET
            if (isset($_GET["titulo"])) {
                foreach ($peliculas as $pelicula) {
                    if ($pelicula->getTitulo() == $_GET["titulo"]) {
                        echo "<h2>Título: {$pelicula->getTitulo()}</h2>";
                        echo "<p>Director: {$pelicula->getDirector()}</p>";
                        echo "<p>Año: {$pelicula->getAnio()}</p>";
                        echo "<img src='images/{$pelicula->getTitulo()}.webp'/>";
                        echo "<br><a href='peliculas.php'>Volver</a>";
                        break;
                    }
                }
            }else{
                // Lista de enlaces
                foreach ($peliculas as $pelicula) {
                $titulo = ($pelicula->getTitulo()); // escapar espacios
                echo "<li><a href='peliculas.php?titulo={$titulo}'>{$pelicula->getTitulo()}</a></li>";
            }
            }
        ?>
    </ul>
</body>
</html>
