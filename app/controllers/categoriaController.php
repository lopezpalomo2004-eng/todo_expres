<?php

require_once __DIR__ . "/../models/Categoria.php";

class categoriaController
{
    public function index()
    {
        $categoriaModel = new Categoria();

        $categorias = $categoriaModel->getAll();

        require_once __DIR__ . "/../views/categoria/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/categoria/crear.php";
    }

    public function guardar()
    {
        $categoriaModel = new Categoria();

        $categoriaModel->guardar(
            $_POST['nombre']
        );

        header("Location: /Todo_Expres/public/categoria");
        exit;
    }
}