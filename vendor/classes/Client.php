<?php

class Client extends Connection
{

    public function __construct()
    {
        $this->connect();
    }

    public function insertClient(array $dataClient): bool
    {
        //calculo de idCliente
        $sql = $this->conn->query("SELECT max(idCliente) as 'maxId' from cliente");
        $idClient = $sql->fetch(PDO::FETCH_ASSOC);
        $newIdClient = $idClient['maxId'] + 1;

        //inserción

        $stmtInsert = $this->conn->prepare("INSERT INTO `cliente`(`idCliente`, `nombreCuenta`, `correo`, `contraseña`, `nombreCliente`, `apellido`, `telefono`) VALUES (?,?,?,?,?,?,?)");
        //vincular parametros

        $stmtInsert->bindParam(1, $newIdClient, PDO::PARAM_INT);
        $stmtInsert->bindParam(2, $dataClient['userName'], PDO::PARAM_STR);
        $stmtInsert->bindParam(3, $dataClient['email'], PDO::PARAM_STR);
        $stmtInsert->bindParam(4, $dataClient['password'], PDO::PARAM_STR);
        $stmtInsert->bindParam(5, $dataClient['nameClient'], PDO::PARAM_STR);
        $stmtInsert->bindParam(6, $dataClient['sureName'], PDO::PARAM_STR);
        $stmtInsert->bindParam(7, $dataClient['telephone'], PDO::PARAM_INT);

        return $stmtInsert->execute();
    }
}
