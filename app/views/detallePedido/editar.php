
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar detalle de pedido</title>
</head>
<body>

    <h1>Editar detalle de pedido</h1>

    <form action="/Todo_Expres/public/detallePedido/actualizar/<?= $detalle['id_detalle'] ?>" method="POST">

        <label>Cantidad:</label>
        <input type="number" name="cantidad" min="1"
               value="<?= htmlspecialchars($detalle['cantidad']) ?>" required>
        <br><br>

        <label>Precio unitario:</label>
        <input type="number" name="precio_unitario" min="0" step="0.01"
               value="<?= htmlspecialchars($detalle['precio_unitario']) ?>" required>
        <br><br>

        <label>ID del pedido:</label>
        <input type="number" name="id_pedido" min="1"
               value="<?= htmlspecialchars($detalle['id_pedido']) ?>" required>
        <br><br>

        <label>ID del producto:</label>
        <input type="number" name="id_producto" min="1"
               value="<?= htmlspecialchars($detalle['id_producto']) ?>" required>
        <br><br>

        <button type="submit">Actualizar detalle</button>

    </form>

    <br>

    <a href="/Todo_Expres/public/detallePedido">Volver al listado</a>

</body>
</html>
