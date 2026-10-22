
<?php

require_once __DIR__ . "/../../config/Database.php";

class DetallePedido
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM detalle_pedido";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM detalle_pedido WHERE id_detalle = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar(
        $cantidad,
        $precio_unitario,
        $subtotal,
        $id_pedido,
        $id_producto
    ) {
        $sql = "INSERT INTO detalle_pedido
                (cantidad, precio_unitario, subtotal, id_pedido, id_producto)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            $cantidad,
            $precio_unitario,
            $subtotal,
            $id_pedido,
            $id_producto
        ]);
    }

    public function actualizar(
        $id,
        $cantidad,
        $precio_unitario,
        $subtotal,
        $id_pedido,
        $id_producto
    ) {
        $sql = "UPDATE detalle_pedido
                SET cantidad = ?,
                    precio_unitario = ?,
                    subtotal = ?,
                    id_pedido = ?,
                    id_producto = ?
                WHERE id_detalle = ?";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            $cantidad,
            $precio_unitario,
            $subtotal,
            $id_pedido,
            $id_producto,
            $id
        ]);
    }
}

