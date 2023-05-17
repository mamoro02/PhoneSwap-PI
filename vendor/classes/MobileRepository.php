<?php

class MobileRepository extends Connection
{
    const  CARDS = 5;
    public function __construct()
    {
        $this->connect();
    }

    public function getAllModels(): array
    {
        //consulta para extraer a todos los modelos
        $sql = $this->conn->query("SELECT * FROM `modelo`");



        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

            $arrModels[] = new Model(...$row);
        }

        return $arrModels;
    }

    public function getModel(int $idModel): Model
    {

        $stmt = $this->conn->prepare("SELECT * FROM modelo WHERE idModelo=?");

        $stmt->bindParam(1, $idModel, PDO::PARAM_INT);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return New Model(...$row);
    }

    public function drawModels(array $dataModels): string
    {
        $output = "";

        //prueba variable de ajuste

        $adjust = 1;
        $active = 'active';
        foreach ($dataModels as $model) {



            if ($adjust == 1) {

                $output .= "<div class='carousel-item " . $active . "'>";
                $output .= "  <div class='row'>";
                $active = "";
            }


            //columna de la card
            $output .= "            <div class='col-md-3 mb-3 text-center'>";
            $output .= "                <div class='card'>";
            $output .= "                    <img class='img-fluid' alt='100%x280' src='imagenes/img/" . $model->getImage() . "'>";
            $output .= "                    <div class='card-body'>";
            $output .= "                        <h4 class='card-title'>" . $model->getModel() . "</h4>";
            $output .= "                        <p class='card-text'>" . $model->getDescription() . "</p>";
            $output .= "                        <a href='fichaTecnica.php?idModelo=" . $model->getIdModel() . "' class='btn btn-primary r'>Detalles</a>";
            $output .= "                    </div>";
            $output .= "                    <div class='card-footer text-muted'>" . $model->getCurrentPrice() . "</div>";
            $output .= "                </div>"; //cierre de la card
            $output .= "            </div>"; //cierre de la col

            $adjust++; //incrementamos la variable

            if ($adjust == self::CARDS) {
                $output .= "    </div>"; //cierre de la row
                $output .= "</div>"; //cierre del carousel-item

                $adjust = 1;
            }
        }
        return $output;
    }
}
