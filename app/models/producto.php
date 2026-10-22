
<?php

require_once __DIR__ . "/../../config/Database.php";

class Producto
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM producto";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM producto WHERE id_producto = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $descripcion, $precio, $stock, $imagen, $id_categoria, $id_proveedor)
    {
        $sql = "INSERT INTO producto
                (nombre, descripcion, precio, stock, imagen, id_categoria, id_proveedor)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            $nombre,
            $descripcion,
            $precio,
            $stock,
            $imagen,
            $id_categoria,
            $id_proveedor
        ]);
    }

    public function actualizar($id, $nombre, $descripcion, $precio, $stock, $imagen, $id_categoria, $id_proveedor)
    {
        $sql = "UPDATE producto
                SET nombre = ?, descripcion = ?, precio = ?, stock = ?,
                    imagen = ?, id_categoria = ?, id_proveedor = ?
                WHERE id_producto = ?";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            $nombre,
            $descripcion,
            $precio,
            $stock,
            $imagen,
            $id_categoria,
            $id_proveedor,
            $id
        ]);
    }
}
