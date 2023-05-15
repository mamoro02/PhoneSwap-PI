<?php

class MobileRepository extends Connection {

    public function __construct()
    {
        $this->connect();
    }

    public function getAllModels():array
    {
        //consulta para extraer a todos los modelos
        $sql = $this->conn->query("SELECT * FROM `modelo`");

        

        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

            $arrModels [] = new Model(...$row);
        }

        return $arrModels;

    }
}