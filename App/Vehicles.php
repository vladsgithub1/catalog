<?php

namespace App;

class Vehicles
{
    /**
     * @var string
     */
    protected $brand;


    /**
     * @var int
     */
    protected $productionYear;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $vin;

    /**
     * @return int
     */
    public function getProductionYear(): int
    {
        return $this->productionYear;
    }

    /**
     * @param int $productionYear
     */
    public function setProductionYear(int $productionYear): void
    {
        $this->productionYear = $productionYear;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getVin(): string
    {
        return $this->vin;
    }

    /**
     * @param string $vin
     */
    public function setVin(string $vin): void
    {
        $this->vin = $vin;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
}
