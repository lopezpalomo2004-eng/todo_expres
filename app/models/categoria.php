<?php

require_once __DIR__ . "/../../config/Database.php";

class Categoria
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM categoria";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre)
    {
        $sql = "INSERT INTO categoria (nombre) VALUES (?)";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([$nombre]);
    }
}