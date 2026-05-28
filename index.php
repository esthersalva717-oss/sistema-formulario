index.php

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Simple</title>

    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">

    <h2>Formulario</h2>

    <form method="POST" action="insertar.php">

        <input type="text" name="nombre" placeholder="Ingrese nombre" required>

        <input type="number" step="0.01" name="precio" placeholder="Ingrese precio" required>

        <input type="number" name="stock" placeholder="Ingrese stock" required>

        <button type="submit" name="guardar">
            Guardar
        </button>

    </form>

    <?php include("mostrar.php"); ?>

</div>

</body>
</html>