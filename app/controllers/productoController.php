
<?php

require_once __DIR__ . "/../models/producto.php";
require_once __DIR__ . "/../models/categoria.php";
require_once __DIR__ . "/../models/proveedor.php";

class ProductoController
{
    private $producto;
    private $categoria;
    private $proveedor;

    public function __construct()
    {
        $this->producto = new Producto();
        $this->categoria = new Categoria();
        $this->proveedor = new Proveedor();
    }

    public function index()
    {
        $productos = $this->producto->getAll();

        require_once __DIR__ . "/../views/producto/index.php";
    }

    public function crear()
    {
        $categorias = $this->categoria->getAll();
        $proveedores = $this->proveedor->getAll();

        require_once __DIR__ . "/../views/producto/crear.php";
    }


    public function editar($id)
    {
        $producto = $this->producto->getById($id);
        $categorias = $this->categoria->getAll();
        $proveedores = $this->proveedor->getAll();

        if (!$producto) {
            die("Producto no encontrado.");
        }

        require_once __DIR__ . "/../views/producto/editar.php";
    }
    
public function guardar()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nombre = trim($_POST["nombre"] ?? "");
        $descripcion = trim($_POST["descripcion"] ?? "");
        $precio = $_POST["precio"] ?? 0;
        $stock = $_POST["stock"] ?? 0;
        $imagen = trim($_POST["imagen"] ?? "");
        $id_categoria = $_POST["id_categoria"] ?? "";
        $id_proveedor = $_POST["id_proveedor"] ?? "";

        if (
            $nombre === "" ||
            !is_numeric($precio) ||
            $precio < 0 ||
            !is_numeric($stock) ||
            $stock < 0 ||
            $id_categoria === "" ||
            $id_proveedor === ""
        ) {
            die("Error: revisa los datos del producto.");
        }

        $resultado = $this->producto->guardar(
            $nombre,
            $descripcion,
            $precio,
            $stock,
            $imagen,
            $id_categoria,
            $id_proveedor
        );

        if ($resultado) {
            header("Location: /Todo_Expres/public/producto");
            exit;
        }

        die("Error al guardar el producto.");
    }
}

    public function actualizar($id)
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = trim($_POST["nombre"] ?? "");
            $descripcion = trim($_POST["descripcion"] ?? "");
            $precio = $_POST["precio"] ?? 0;
            $stock = $_POST["stock"] ?? 0;
            $imagen = trim($_POST["imagen"] ?? "");
            $id_categoria = $_POST["id_categoria"] ?? "";
            $id_proveedor = $_POST["id_proveedor"] ?? "";

            if (
                $nombre === "" ||
                !is_numeric($precio) ||
                $precio < 0 ||
                !is_numeric($stock) ||
                $stock < 0 ||
                $id_categoria === "" ||
                $id_proveedor === ""
            ) {
                die("Error: revisa los datos del producto.");
            }

            $resultado = $this->producto->actualizar(
                $id,
                $nombre,
                $descripcion,
                $precio,
                $stock,
                $imagen,
                $id_categoria,
                $id_proveedor
            );

            if ($resultado) {
                header("Location: /Todo_Expres/public/producto");
                exit;
            }

            die("Error al actualizar el producto.");
        }
    }
}
