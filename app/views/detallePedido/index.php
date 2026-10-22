
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles de pedidos </title>
</head>
<body>

    <h1>Listado de detalles de pedidos</h1>

    <a href="/Todo_Expres/public/detallePedido/crear">
    
    </a>

    <br><br>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID detalle</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Subtotal</th>
                <th>ID pedido</th>
                <th>ID producto</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($detalles as $detalle): ?>
                <tr>
                    <td><?= htmlspecialchars($detalle['id_detalle']) ?></td>
                    <td><?= htmlspecialchars($detalle['cantidad']) ?></td>
                    <td><?= htmlspecialchars($detalle['precio_unitario']) ?></td>
                    <td><?= htmlspecialchars($detalle['subtotal']) ?></td>
                    <td><?= htmlspecialchars($detalle['id_pedido']) ?></td>
                    <td><?= htmlspecialchars($detalle['id_producto']) ?></td>
                    <td>
                        <a href="/Todo_Expres/public/detallePedido/editar/<?= $detalle['id_detalle'] ?>">
                            Editar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
</body>
</html>
