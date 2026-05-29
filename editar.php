<?php

include("conexion.php");

$id = $_GET['id'];

$buscar = "SELECT * FROM productos WHERE id='$id'";
$resultado = mysqli_query($conexion, $buscar);

$fila = mysqli_fetch_assoc($resultado);

if(isset($_POST['actualizar'])){

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $actualizar = "UPDATE productos
    SET nombre='$nombre',
        precio='$precio',
        stock='$stock'
    WHERE id='$id'";

    mysqli_query($conexion, $actualizar);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>

<h2>Editar Producto</h2>

<form method="POST">

    <input type="text"
    name="nombre"
    value="<?php echo $fila['nombre']; ?>">

    <br><br>

    <input type="number"
    step="0.01"
    name="precio"
    value="<?php echo $fila['precio']; ?>">

    <br><br>

    <input type="number"
    name="stock"
    value="<?php echo $fila['stock']; ?>">

    <br><br>

    <button type="submit" name="actualizar">
        Actualizar
    </button>

</form>

</body>
</html>