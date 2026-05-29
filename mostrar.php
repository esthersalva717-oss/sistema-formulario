<?php

include("conexion.php");

$mostrar = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $mostrar);

?>

<table>

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

    <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['precio']; ?></td>
        <td><?php echo $fila['stock']; ?></td>
        <td>

            <a href="editar.php?id=<?php echo $fila['id']; ?>">
                Editar
            </a>

            |

            <a href="eliminar.php?id=<?php echo $fila['id']; ?>">
                Eliminar
            </a>

        </td>
    </tr>

    <?php } ?>

</table>