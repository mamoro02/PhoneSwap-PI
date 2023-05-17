<?php


class Mobile extends Model
{

    private string $numSerie;
    private int $idModelMobile;
    private int $idClient;
    private ?float $salePrize;
    private ?string $saleDate;
    private ?string $comments;

    public function __construct(
        string $numSerie,
        int $idModelMobile,
        int $idClient,
        ?float $salePrize,
        ?string $saleDate,
        ?string $comments,
        int $idModel,
        ?string $brand,
        ?string $description,
        ?string $model,
        ?float $currentPrice,
        ?string $megaPixels,
        ?string $ram,
        ?string $image,
        ?string $resolution,
        ?bool $fiveG,
        ?bool $doubleSim,
        ?string $cpuSpeed,
        ?string $storage,
        ?string $cpuType,
        ?string $dimensions,
        ?string $so,
        ?int $stock
    ) {
        $this->numSerie = $numSerie;
        $this->idModelMobile = $idModelMobile;
        $this->idClient = $idClient;
        $this->salePrize = $salePrize;
        $this->saleDate = $saleDate;
        $this->comments = $comments;

        parent::__construct(
            $idModel,
            $brand,
            $description,
            $model,
            $currentPrice,
            $megaPixels,
            $ram,
            $image,
            $resolution,
            $fiveG,
            $doubleSim,
            $cpuSpeed,
            $storage,
            $cpuType,
            $dimensions,
            $so,
            $stock
        );
    }


    public function getNumSerie()
    {
        return $this->numSerie;
    }


    public function getIdModelMobile()
    {
        return $this->idModelMobile;
    }


    public function getIdClient()
    {
        return $this->idClient;
    }


    public function getSalePrize()
    {
        return $this->salePrize;
    }


    public function getSaleDate()
    {
        return $this->saleDate;
    }


    public function getComments()
    {
        return $this->comments;
    }
}
