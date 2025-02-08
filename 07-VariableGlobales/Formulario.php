<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Fomulario</title>
</head>

<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action='Send.php'>
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="ape">Apellido</label>
            <input type="text" name="ape">
        </p>
        <input type="submit" value="Eviar Datos"/>

    </form>
</body>

</html>