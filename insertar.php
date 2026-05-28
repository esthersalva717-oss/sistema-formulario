insertar.php

<?php

include("conexion.php");

if (isset($_POST['guardar'])) {

    $nombre = $_POST['nombre'] ?? '';
    $precio = $_POST['precio'] ?? null;
    $stock  = $_POST['stock'] ?? null;

    if ($nombre !== '' && $precio !== null && $stock !== null) {

        $precio = (float)$precio;
        $stock  = (int)$stock;

        $insertar = "INSERT INTO productos(nombre, precio, stock)
        VALUES('$nombre','$precio','$stock')";

        mysqli_query($conexion, $insertar);

        header("Location: index.php");
    }
}

?>