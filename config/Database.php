<?php

class Database
{
    private $host = "localhost";
    private $port = "3306";
    private $db_name = "todo_expres";
    private $username = "root";
    private $password = "";

    public function conectar()
    {
        try {
            $conexion = new PDO(
                "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;

        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}