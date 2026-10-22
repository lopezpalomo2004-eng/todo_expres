
<?php

require_once __DIR__ . "/../app/controllers/rolController.php";
require_once __DIR__ . "/../app/controllers/usuarioController.php";
require_once __DIR__ . "/../app/controllers/categoriaController.php";
require_once __DIR__ . "/../app/controllers/productoController.php";
require_once __DIR__ . "/../app/controllers/detallePedidoController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

?>

<a href="/Todo_Expres/public/rol">Roles</a>
<a href="/Todo_Expres/public/usuario">Usuarios</a>
<a href="/Todo_Expres/public/categoria">Categorías</a>
<a href="/Todo_Expres/public/producto">Productos</a>
<a href="/Todo_Expres/public/detallePedido">Detalles de pedidos</a>

<a href="/Todo_Expres/public/crear/usuario">Crear Usuario</a>
<a href="/Todo_Expres/public/crear/categoria">Crear Categoría</a>
<a href="/Todo_Expres/public/producto/crear">Crear Producto</a>
<a href="/Todo_Expres/public/detallePedido/crear">Crear detalle de pedido</a>

<hr>

<?php

if ($method === 'GET' && $uri === '/Todo_Expres/public/rol') {

    $rolController = new rolController();
    $rolController->index();

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/usuario') {

    $usuarioController = new usuarioController();
    $usuarioController->index();

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/categoria') {

    $categoriaController = new categoriaController();
    $categoriaController->index();

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/crear/usuario') {

    $usuarioController = new usuarioController();
    $usuarioController->crear();

} elseif ($method === 'POST' && $uri === '/Todo_Expres/public/usuario') {

    $usuarioController = new usuarioController();
    $usuarioController->guardar();

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/crear/categoria') {

    $categoriaController = new categoriaController();
    $categoriaController->crear();

} elseif ($method === 'POST' && $uri === '/Todo_Expres/public/categoria') {

    $categoriaController = new categoriaController();
    $categoriaController->guardar();

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/producto') {

    $productoController = new ProductoController();
    $productoController->index();

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/producto/crear') {

    $productoController = new ProductoController();
    $productoController->crear();

} elseif ($method === 'POST' && $uri === '/Todo_Expres/public/producto/guardar') {

    $productoController = new ProductoController();
    $productoController->guardar();

} elseif ($method === 'GET' && preg_match('#^/Todo_Expres/public/producto/editar/(\d+)$#', $uri, $coincidencias)) {

    $productoController = new ProductoController();
    $productoController->editar((int) $coincidencias[1]);

} elseif ($method === 'POST' && preg_match('#^/Todo_Expres/public/producto/actualizar/(\d+)$#', $uri, $coincidencias)) {

    $productoController = new ProductoController();
    $productoController->actualizar((int) $coincidencias[1]);

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/detallePedido') {

    $detallePedidoController = new detallePedidoController();
    $detallePedidoController->index();

} elseif ($method === 'GET' && $uri === '/Todo_Expres/public/detallePedido/crear') {

    $detallePedidoController = new detallePedidoController();
    $detallePedidoController->crear();

} elseif ($method === 'POST' && $uri === '/Todo_Expres/public/detallePedido/guardar') {

    $detallePedidoController = new detallePedidoController();
    $detallePedidoController->guardar();

} elseif ($method === 'GET' && preg_match('#^/Todo_Expres/public/detallePedido/editar/(\d+)$#', $uri, $coincidencias)) {

    $detallePedidoController = new detallePedidoController();
    $detallePedidoController->editar((int) $coincidencias[1]);

} elseif ($method === 'POST' && preg_match('#^/Todo_Expres/public/detallePedido/actualizar/(\d+)$#', $uri, $coincidencias)) {

    $detallePedidoController = new detallePedidoController();
    $detallePedidoController->actualizar((int) $coincidencias[1]);

} else {

    echo "Página no encontrada.";

}
