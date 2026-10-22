
<h1>Listado de Productos </h1>

<p>
    <a href="/Todo_Expres/public/producto/crear">
        
    </a>
</p>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoría</th>
            <th>Proveedor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= htmlspecialchars((string) $producto['id_producto']) ?></td>
                <td><?= htmlspecialchars($producto['nombre']) ?></td>
                <td><?= htmlspecialchars($producto['descripcion'] ?? '') ?></td>
                <td><?= htmlspecialchars((string) $producto['precio']) ?></td>
                <td><?= htmlspecialchars((string) $producto['stock']) ?></td>
                <td><?= htmlspecialchars((string) $producto['id_categoria']) ?></td>
                <td><?= htmlspecialchars((string) $producto['id_proveedor']) ?></td>
                <td>
                    <a href="/Todo_Expres/public/producto/editar/<?= (int) $producto['id_producto'] ?>">
                        Editar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
