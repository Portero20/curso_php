<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>

<body>

    <table>

        <a href="index.php?controller=usuario&accion=mostrarUsuario">Nuevo</a>

        <tr><?php require_once("../core/constantes.php");

            foreach (usuarioColumns as $value) : ?>

                <td><?php echo $value;  ?></td>

            <?php endforeach; ?>

        </tr>

        <?php foreach($this->consultarTodo() as $usuario): ?>
        
        <tr>

            <td><?php echo $usuario->nombre ?></td>
            <td><?php echo $usuario->apellido  ?></td>
            <td><?php echo $usuario->telefono  ?></td>
            <td><?php echo $usuario->edad  ?></td>

            <td><a href="../modulo_9/index.php?controller=usuario&accion=mostrarUsuario&id=<?php echo $usuario->id ?>">Editar</a></td>
            <td><a href="../modulo_9/index.php?controller=usuario&accion=eliminar&id=<?php echo $usuario->id ?>" onclick="javascript: return confirm('¿Estas seguro que deseas eliminar?')">Eliminar</a></td>

        </tr>
        <?php endforeach;  ?>

    </table>

</body>

</html>