<h1>Listado De Usuarios</h1>

<?php if (!empty($usuarios)) { ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>ID Rol</th>
    </tr>

    <?php foreach ($usuarios as $usuario): ?>

    <tr>
        <td><?= $usuario["id_usuario"] ?></td>
        <td><?= $usuario["nombre"] ?></td>
        <td><?= $usuario["apellido"] ?></td>
        <td><?= $usuario["correo"] ?></td>
        <td><?= $usuario["telefono"] ?></td>
        <td><?= $usuario["direccion"] ?></td>
        <td><?= $usuario["id_rol"] ?></td>
    </tr>

    <?php endforeach; ?>

</table>

<?php } else { ?>

    <p>No hay usuarios disponibles.</p>

<?php } ?>