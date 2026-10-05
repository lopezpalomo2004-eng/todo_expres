<h1>Listado De Categorías</h1>

<?php if (!empty($categorias)) { ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>

    <tr>
        <td><?= $categoria["id_categoria"] ?></td>
        <td><?= $categoria["nombre"] ?></td>
    </tr>

    <?php endforeach; ?>

</table>

<?php } else { ?>

    <p>No hay categorías disponibles.</p>

<?php } ?>