<form action="/Todo_Expres/public/usuario" method="POST">

```
<label>Nombre</label>
<input type="text" name="nombre">

<label>Apellido</label>
<input type="text" name="apellido">

<label>Correo</label>
<input type="text" name="correo">

<label>Contraseña</label>
<input type="password" name="contrasena">

<label>Teléfono</label>
<input type="text" name="telefono">

<label>Dirección</label>
<input type="text" name="direccion">

<label>Rol</label>

<select name="id_rol" required>

    <option value="">Seleccione un rol</option>

    <?php foreach ($roles as $rol): ?>

        <option value="<?= $rol['id_rol'] ?>">
            <?= $rol['nombre_rol'] ?>
        </option>

    <?php endforeach; ?>

</select>

<button type="submit">Guardar</button>
```

</form>
