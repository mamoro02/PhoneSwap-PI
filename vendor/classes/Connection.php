<?php

class Connection
{
    protected PDO $conn;
    protected function connect()
    {
        $config = json_decode(file_get_contents(__DIR__ . "/../../config/dba.json"), true);
        try {
            $this->conn = new PDO(
                "mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";port=" . $config["port"],
                $config["user"],
                $config["password"]
            );
        } catch (PDOException $exception) {
            echo "ha fallado la conexión. Error: ". $exception->getMessage();
        }
    }
}