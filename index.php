<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
    <h2>Formulario Estudios</h2>
    <form action="#" method="POST">
        <label for="nombre">
            Nombre:<input type="text" required name="nombre" id="nombre" placeholder="Ingrese nombre..." >
        </label>
        <br>
        <p><h3>Nivel de estudios</h3></p>
        <label for="estudios">
            <input type="radio" required name="estudios" id="estudio1" value="No tiene estudios">No tiene estudios.
            <input type="radio" required name="estudios" id="estudio2" value="Estudios primarios">Estudios primarios.
            <input type="radio" required name="estudios" id="estudio3" value="Estudios secundarios">Estudios secundarios.
        </label>
        <br>
        <input type="submit" value="Enviar">
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nombre = $_POST['nombre'];
                $estudios = $_POST['estudios'];
                echo"<p>Hola, $nombre. Tu nivel de estudios es: $estudios .</p>";
            } 
        ?>
    </form>
    <a href="index2.php">Ejercicio2</a>
</body>
</html>