<h1>Listado de Roles</h1>

<?php if (!empty($roles)) { ?>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre del Rol</th>
    </tr>

    <?php foreach ($roles as $rol): ?>

    <tr>
        <td><?= $rol["id_rol"] ?></td>
        <td><?= $rol["nombre_rol"] ?></td>
    </tr>

    <?php endforeach; ?>

</table>

<?php } else { ?>

    <p>No hay roles disponibles.</p>

<?php } ?>