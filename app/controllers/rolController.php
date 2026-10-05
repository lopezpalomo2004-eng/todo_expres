<?php

require_once __DIR__ . "/../models/rol.php";

class rolController
{
    public function index()
    {
        $rolModel = new Rol();

        try {
            $roles = $rolModel->getAll();
        } catch (PDOException) {
            echo "No se encontraron roles";
        }

        require_once __DIR__ . "/../views/rol/index.php";
    }
}