<?php

namespace App;

Class Catalog
{
    /**
     * @var array
     */
    private $cars = [];

    /**
     * @param Car $car
     * @return void
     */
    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }

    /**
     * @return void
     **/
    public function getCarsInfo(): void
    {
        foreach ($this->cars as $car)
        {
            echo $car->getBrand() . PHP_EOL;
            echo $car->getYearOfManufacture() . PHP_EOL;
            echo $car->getModel() . PHP_EOL;
            echo $car->getVin() . PHP_EOL;
            if(method_exists($car, 'getEquipment')) {
                echo $car->getEquipment() . PHP_EOL;
            } elseif (method_exists($car, 'getLoadCapacity')) {
                echo $car->getLoadCapacity() . PHP_EOL;
            }
        }
    }
}