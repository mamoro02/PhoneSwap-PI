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

        return new Model(...$row);
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
            $output .= "                    <a href='Item.php?idModelo=" . $model->getIdModel() . "'><img class='img-fluid' alt='100%x280' src='imagenes/img/" . $model->getImage() . "'></a>";
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

    public function getBrands(): array
    {

        $sql = $this->conn->query("SELECT * FROM marca");

        $brands = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $brands;
    }

    public function drawBrands(array $brands): string
    {
        $output = "";
        foreach ($brands as $brand) {
            $output .= "<a class='dropdown-item' href='filtrado.php?idMarca=" . $brand['idMarca'] . "'>" . $brand['nombreMarca'] . "</a>"; //pensar como filtrar por marca, ¿A dónde va el enlace? LA CLAVE ES PONERLE UN PARAMETRO AL ENLACE CON LA IDMODELO
        }

        return $output;
    }

    public function getModelByBrand(int $idMarca): array
    {
        $stmt = $this->conn->prepare("SELECT * FROM `modelo` WHERE `marca`= ?");

        $stmt->bindParam(1, $idMarca, PDO::PARAM_INT);

        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $dataModelsByBrand[] = new Model(...$row);
        }

        return $dataModelsByBrand;
    }

    public function drawModelsByBrand(array $mobilesByBrand): string
    {
        $output = "";

        //prueba variable de ajuste

        $adjust = 1;
        $active = 'active';
        foreach ($mobilesByBrand as $brand) {



            if ($adjust == 1) {

                $output .= "<div class='carousel-item " . $active . "'>";
                $output .= "  <div class='row'>";
                $active = "";
            }


            //columna de la card
            $output .= "            <div class='col-md-3 mb-3 text-center'>";
            $output .= "                <div class='card'>";
            $output .= "                    <a href='Item.php?idModelo=" . $brand->getIdModel() . "'><img class='img-fluid' alt='100%x280' src='imagenes/img/" . $brand->getImage() . "'></a>";
            $output .= "                    <div class='card-body'>";
            $output .= "                        <h4 class='card-title'>" . $brand->getModel() . "</h4>";
            $output .= "                        <p class='card-text'>" . $brand->getDescription() . "</p>";
            $output .= "                        <a href='fichaTecnica.php?idModelo=" . $brand->getIdModel() . "' class='btn btn-primary r'>Detalles</a>";
            $output .= "                    </div>";
            $output .= "                    <div class='card-footer text-muted'>" . $brand->getCurrentPrice() . "</div>";
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
