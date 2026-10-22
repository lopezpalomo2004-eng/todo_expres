
<h1>Editar Producto - Todo Expres</h1>

<form action="/Todo_Expres/public/producto/actualizar/<?= (int) $producto['id_producto'] ?>" method="POST">

    <label>Nombre del producto:</label><br>
    <input
        type="text"
        name="nombre"
        value="<?= htmlspecialchars($producto['nombre']) ?>"
        required
    >
    <br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"><?= htmlspecialchars($producto['descripcion'] ?? '') ?></textarea>
    <br><br>

    <label>Precio:</label><br>
    <input
        type="number"
        name="precio"
        min="0"
        step="0.01"
        value="<?= htmlspecialchars($producto['precio']) ?>"
        required
    >
    <br><br>

    <label>Stock:</label><br>
    <input
        type="number"
        name="stock"
        min="0"
        value="<?= htmlspecialchars($producto['stock']) ?>"
        required
    >
    <br><br>

    <label>Imagen (ruta o nombre del archivo):</label><br>
    <input
        type="text"
        name="imagen"
        value="<?= htmlspecialchars($producto['imagen'] ?? '') ?>"
    >
    <br><br>

    <label>Categoría:</label><br>
    <select name="id_categoria" required>
        <option value="">Seleccione una categoría</option>

        <?php foreach ($categorias as $categoria): ?>
            <option
                value="<?= htmlspecialchars($categoria['id_categoria']) ?>"
                <?= $categoria['id_categoria'] == $producto['id_categoria'] ? 'selected' : '' ?>
            >
                <?= htmlspecialchars($categoria['nombre']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <label>Proveedor:</label><br>
    <select name="id_proveedor" required>
        <option value="">Seleccione un proveedor</option>

        <?php foreach ($proveedores as $proveedor): ?>
            <option
                value="<?= htmlspecialchars($proveedor['id_proveedor']) ?>"
                <?= $proveedor['id_proveedor'] == $producto['id_proveedor'] ? 'selected' : '' ?>
            >
                <?= htmlspecialchars($proveedor['nombre']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <button type="submit">Actualizar producto</button>

</form>

<br>

<a href="/Todo_Expres/public/producto">Volver al listado</a>
