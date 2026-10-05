<?php

require_once __DIR__ . "/../../config/Database.php";

class Usuario
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM usuario";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $apellido, $correo, $contrasena, $telefono, $direccion, $id_rol)
    {
        try {

            $sql = "INSERT INTO usuario 
                    (nombre, apellido, correo, contrasena, telefono, direccion, id_rol) 
                    VALUES 
                    (:nombre, :apellido, :correo, :contrasena, :telefono, :direccion, :id_rol)";

            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":apellido", $apellido);
            $consulta->bindParam(":correo", $correo);
            $consulta->bindParam(":contrasena", $contrasena);
            $consulta->bindParam(":telefono", $telefono);
            $consulta->bindParam(":direccion", $direccion);
            $consulta->bindParam(":id_rol", $id_rol);

            return $consulta->execute();

        } catch (PDOException $e) {

            echo "Error al guardar el usuario: " . $e->getMessage();

        }
    }
}