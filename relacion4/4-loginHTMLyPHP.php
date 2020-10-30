<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario POST con php y html en el mismo archivo</title>
</head>

<body>

    <?php if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
        <h1>Formulario en PHP</h1>
        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
            <p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" />
            </p>
            <p>
                <label for="contraseña">Contraseña</label>
                <input type="password" name="contraseña" /><br />
                <input type="submit" value="Enviar datos" />
            </p>
        </form>
    <?php } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        if ($usuario == "usuario" && $contraseña == "1234") {
            header("Location: 3-paginaBienvenida.html");
        } else {
            header("Location: 3-paginaError.html");
        }
    } ?>

</body>

</html>