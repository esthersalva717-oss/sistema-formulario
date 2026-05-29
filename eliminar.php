<?php

include("conexion.php");

$id = $_GET['id'];

$eliminar = "DELETE FROM productos WHERE id='$id'";

mysqli_query($conexion, $eliminar);

header("Location: index.php");

?>