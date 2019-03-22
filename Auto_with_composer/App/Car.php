<?php

namespace App;

Class Car
{
    /**
     * @var string
     */
    private $brand;

    /**
     * @var  int
     */
    private $yearOfManufacture;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $vin;

    /**
     * @return string
     * @throws \RuntimeException
     */
    public function getBrand():string
    {
        if(isset($this->brand)) {
            return $this->brand;
        } else {
            throw new \RuntimeException('Brand wasn`t set');
        }
    }

    /**
     * @param string
     * @return void
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return int
     * @throws \RuntimeException
     */
    public function getYearOfManufacture(): int
    {
        if(isset($this->yearOfManufacture)) {
            return $this->yearOfManufacture;
        } else {
            throw new \RuntimeException('Year of Manufacture wasn`t set');
        }
    }

    /**
     * @param int
     * @return void
     */
    public function setYearOfManufacture(int $yearOfManufacture): void
    {
        $this->yearOfManufacture = $yearOfManufacture;
    }

    /**
     * @return string
     * @throws \RuntimeException
     */
    public function getModel(): string
    {
        if(isset($this->model)) {
            return $this->model;
        } else {
            throw new \RuntimeException('Model wasn`t set');
        }
    }

    /**
     * @param string
     * @return void
     */
    public function setModel(string $model): void
    {

        $this->model = $model;
    }

    /**
     * @return string
     * @throws \RuntimeException
     */
    public function getVin(): string
    {
        if(isset($this->vin)) {
            return $this->vin;
        } else {
            throw new \RuntimeException('Vin wasn`t set');
        }
    }

    /**
     * @param string
     * @return void
     */
    public function setVin(string $vin): void
    {
        $this->vin = $vin;
    }
}
