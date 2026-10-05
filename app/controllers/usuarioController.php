<?php

require_once __DIR__ . "/../models/usuario.php";
require_once __DIR__ . "/../models/Rol.php";

class usuarioController
{
    public function index()
    {
        $usuarioModel = new Usuario();

        $usuarios = $usuarioModel->getAll();

        require_once __DIR__ . "/../views/usuario/index.php";
    }

    public function crear()
    {
        $rolModel = new Rol();

        $roles = $rolModel->getAll();

        require_once __DIR__ . "/../views/usuario/crear.php";
    }

    public function guardar()
    {
        $usuarioModel = new Usuario();

        $usuarioModel->guardar(
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['correo'],
            $_POST['contrasena'],
            $_POST['telefono'],
            $_POST['direccion'],
            $_POST['id_rol']
        );

        header("Location: /Todo_Expres/public/usuario");
        exit;
    }
}