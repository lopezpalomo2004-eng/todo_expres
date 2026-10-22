
<?php

require_once __DIR__ . "/../models/DetallePedido.php";

class detallePedidoController
{
    private $detallePedido;

    public function __construct()
    {
        $this->detallePedido = new DetallePedido();
    }

    public function index()
    {
        $detalles = $this->detallePedido->getAll();

        require_once __DIR__ . "/../views/detallePedido/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/detallePedido/crear.php";
    }

    public function guardar()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $cantidad = $_POST["cantidad"] ?? 0;
            $precio_unitario = $_POST["precio_unitario"] ?? 0;
            $id_pedido = $_POST["id_pedido"] ?? "";
            $id_producto = $_POST["id_producto"] ?? "";

            if (
                !is_numeric($cantidad) ||
                $cantidad <= 0 ||
                !is_numeric($precio_unitario) ||
                $precio_unitario < 0 ||
                $id_pedido === "" ||
                $id_producto === ""
            ) {
                die("Error: revisa los datos del detalle de pedido.");
            }

            $subtotal = $cantidad * $precio_unitario;

            $resultado = $this->detallePedido->guardar(
                $cantidad,
                $precio_unitario,
                $subtotal,
                $id_pedido,
                $id_producto
            );

            if ($resultado) {
                header("Location: /Todo_Expres/public/detallePedido");
                exit;
            }

            die("Error al guardar el detalle del pedido.");
        }
    }

    public function editar($id)
    {
        $detalle = $this->detallePedido->getById($id);

        if (!$detalle) {
            die("Detalle de pedido no encontrado.");
        }

        require_once __DIR__ . "/../views/detallePedido/editar.php";
    }

    public function actualizar($id)
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $cantidad = $_POST["cantidad"] ?? 0;
            $precio_unitario = $_POST["precio_unitario"] ?? 0;
            $id_pedido = $_POST["id_pedido"] ?? "";
            $id_producto = $_POST["id_producto"] ?? "";

            if (
                !is_numeric($cantidad) ||
                $cantidad <= 0 ||
                !is_numeric($precio_unitario) ||
                $precio_unitario < 0 ||
                $id_pedido === "" ||
                $id_producto === ""
            ) {
                die("Error: revisa los datos del detalle de pedido.");
            }

            $subtotal = $cantidad * $precio_unitario;

            $resultado = $this->detallePedido->actualizar(
                $id,
                $cantidad,
                $precio_unitario,
                $subtotal,
                $id_pedido,
                $id_producto
            );

            if ($resultado) {
                header("Location: /Todo_Expres/public/detallePedido");
                exit;
            }

            die("Error al actualizar el detalle del pedido.");
        }
    }
}
