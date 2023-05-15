<?php


class Model
{

    private int $idModel;
    private ?string $brand;
    private ?string $description;
    private ?string $model;
    private ?float $currentPrice;
    private ?string $megaPixels;
    private ?string $ram;
    private ?string $image;
    private ?string $resolution;
    private ?bool $fiveG;
    private ?bool $doubleSim;
    private ?string $cpuSpeed;
    private ?string $storage;
    private ?string $cpuType;
    private ?string $dimensions;
    private ?string $so;
    /* private ?int $stock; */

    public function __construct(
        int $idModelo,
        ?string $marca,
        ?string $descripcion,
        ?string $modelo,
        ?float $precioActual,
        ?string $megaPixeles,
        ?string $ram,
        ?string $imagen,
        ?string $resolucion,
        ?bool $cincoG,
        ?bool $dobleSim,
        ?string $velocidadCpu,
        ?string $capacidad,
        ?string $tipoCpu,
        ?string $dimensiones,
        ?string $sistemaOperativo,
        /* ?int $stock */
    ) {
        $this->idModel = $idModelo;
        $this->brand = $marca;
        $this->description = $descripcion;
        $this->model = $modelo;
        $this->currentPrice = $precioActual;
        $this->megaPixels = $megaPixeles;
        $this->ram = $ram;
        $this->image = $imagen;
        $this->resolution = $resolucion;
        $this->fiveG = $cincoG;
        $this->doubleSim = $dobleSim;
        $this->cpuSpeed = $velocidadCpu;
        $this->storage = $capacidad;
        $this->cpuType = $tipoCpu;
        $this->dimensions = $dimensiones;
        $this->so = $sistemaOperativo;
        /* $this->stock = $stock; */
    }

}
