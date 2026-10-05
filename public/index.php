<?php

require_once __DIR__ . "/../app/controllers/rolController.php";
require_once __DIR__ . "/../app/controllers/usuarioController.php";
require_once __DIR__ . "/../app/controllers/categoriaController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

?>

<a href="/Todo_Expres/public/rol">Roles</a>
<a href="/Todo_Expres/public/usuario">Usuarios</a>
<a href="/Todo_Expres/public/categoria">Categorías</a>

<a href="/Todo_Expres/public/crear/usuario">Crear Usuario</a>
<a href="/Todo_Expres/public/crear/categoria">Crear Categoría</a>

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
}