<?php

require_once "../config/Database.php";

$database = new Database();
$db = $database->conectar();

if ($db) {
    echo "Conexión exitosa con la base de datos todo_expres";
}