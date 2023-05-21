<?php

class Carrito extends Connection
{

    public function __construct()
    {
        $this->connect();

        session_start(); //a partir de este punto vamos a usar variables de sesion

        /* session_destroy(); */
    }

    public function getCesta(int $id): array
    {
        //comprobamos si $_session['cesta'] esta definido y no es null
        if (!isset($_SESSION['cesta']) || !is_array($_SESSION['cesta'])) {
            $_SESSION['cesta'] = []; //inicializamos el array
        }


        //comprobamos que no se encuentre en el array para que no nos lo duplique, true comprueba que los tipos sean iguales

        if (!in_array($id, $_SESSION['cesta'], true)) {
            $_SESSION['cesta'][] = $id;
        }


        $cesta = $_SESSION['cesta'];

        return $cesta;
    }

    public function getModelsCesta(array $cesta): array
    {
        $sql = "SELECT t.*, count(idModelo) as quantity FROM (";
        $sql .= str_repeat("SELECT * FROM `modelo` WHERE `idModelo` = ? UNION ALL ", count($cesta));
        $sql = substr($sql, 0, -11);
        $sql .= ") t GROUP BY t.idModelo;";
        $stmt = $this->conn->prepare($sql);

        for ($i = 1; $i <= count($cesta); $i++) {
            $stmt->bindParam($i, $cesta[$i - 1], PDO::PARAM_INT);
        }
        //$stmt->debugDumpParams();
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function drawCarrito(array $cestaObjects): string
    {

        $output = "";

        foreach ($cestaObjects as $cesta) {
            $output .= "<tr>";
            $output .= "    <td>" . $cesta['modelo'] . "</td>";
            $output .= "    <td>" . $cesta['descripcion'] . "</td>";
            $output .= "    <td>" . $cesta['precioActual'] . "</td>";
            $output .= "    <td>" . $cesta['quantity'] . "</td>";
            $output .= "</tr>";
        }

        return $output;
    }
}
